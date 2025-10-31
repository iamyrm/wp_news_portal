<?php

function subsMail($email, $subject, $message)
{
   $headers = array('Content-Type: text/html; charset=UTF-8');
   wp_mail($email, $subject, $message, $headers);
}

add_action('init', 'handle_subscribe_form_submission');

function handle_subscribe_form_submission()
{
   if (isset($_POST['subscribe_submit'])) {
      if (!isset($_POST['subscribe_form_nonce']) || !wp_verify_nonce($_POST['subscribe_form_nonce'], 'subscribe_form_action')) {
         wp_die('Security check failed. Please try again.');
      }

      $email = isset($_POST['subscriber_email']) ? sanitize_email($_POST['subscriber_email']) : '';

      // Validate the email
      if (!empty($email) && is_email($email)) {

         $username = strtolower(sanitize_user(strstr($email, '@', true), true));

         if (username_exists($username) || email_exists($email)) {
            // User already exists
            $subject = "Subscription Status";
            $message = "Hello,<br><br>The email <strong>{$email}</strong> is already subscribed to our website.<br><br>Thank you.";
            subsMail($email, $subject, $message);
         } else {
            // Generate a strong random password
            $password = wp_generate_password(12, true, true);

            // Create the user
            $user_id = wp_create_user($username, $password, $email);

            if (!is_wp_error($user_id)) {
               $user = new WP_User($user_id);
               $user->set_role('subscriber');

               // Send success email
               $subject = "Subscription Successful";
               $message = "Hello,<br><br>You have successfully subscribed to our website!<br>Your login username is: <strong>{$username}</strong><br>Thank you for joining us!";
               subsMail($email, $subject, $message);
            } else {
               // Error creating user
               $subject = "Subscription Failed";
               $message = "Hello,<br><br>There was an issue subscribing your email <strong>{$email}</strong> to our website. Please try again later.<br><br>Thank you.";
               subsMail($email, $subject, $message);
            }
         }

         wp_redirect(home_url('/'));
      } else {
         // Invalid email
         $subject = "Subscription Failed";
         $message = "Hello,<br><br>The email you provided is invalid. Please try subscribing again with a valid email address.<br><br>Thank you.";
         subsMail($email, $subject, $message);

         wp_redirect(home_url('/'));
      }
   }
}

// Send notification to all subscribers when a new post is published
add_action('publish_post', 'notify_subscribers_on_post_publish', 10, 2);

function notify_subscribers_on_post_publish($post_ID, $post)
{
   // Get author email
   $author_id = $post->post_author;
   $author_email = get_the_author_meta('user_email', $author_id);
   $author_name  = get_the_author_meta('display_name', $author_id);

   // Post details
   $post_title   = get_the_title($post_ID);
   $post_url     = get_permalink($post_ID);
   $post_date    = get_the_date('F j, Y', $post_ID);
   $post_excerpt = has_excerpt($post_ID)
      ? get_the_excerpt($post_ID)
      : wp_trim_words(strip_tags($post->post_content), 20, '...');

   // Featured image
   $featured_image = get_the_post_thumbnail_url($post_ID, 'large');
   if (!$featured_image) {
      $featured_image = get_template_directory_uri() . '/assets/img/subscribe.jpg';
   }

   // Get all subscribers
   $subscribers = get_users(array(
      'role'    => 'subscriber',
      'fields'  => array('user_email', 'display_name')
   ));

   // Build responsive HTML email
   $subject = '📢 New Post Published: ' . $post_title;

   $message = '
    <html>
    <head>
        <style>
            body {
                background-color: #f9f9f9;
                font-family: Arial, sans-serif;
                color: #333;
                margin: 0;
                padding: 0;
            }
            .container {
                max-width: 600px;
                background-color: #ffffff;
                margin: 20px auto;
                border-radius: 8px;
                overflow: hidden;
                box-shadow: 0 0 10px rgba(0,0,0,0.1);
            }
            .header {
                background-color: #0073aa;
                color: #ffffff;
                text-align: center;
                padding: 20px;
                font-size: 22px;
                font-weight: bold;
            }
            .content {
                padding: 20px;
            }
            .content img {
                width: 100%;
                height: auto;
                border-radius: 8px;
            }
            .post-title {
                font-size: 20px;
                margin: 15px 0 10px;
            }
            .post-date {
                font-size: 14px;
                color: #777;
                margin-bottom: 15px;
            }
            .post-excerpt {
                font-size: 16px;
                line-height: 1.6;
                color: #444;
                margin-bottom: 20px;
            }
            .btn {
                display: inline-block;
                background-color: #0073aa;
                color: #fff !important;
                text-decoration: none;
                padding: 10px 18px;
                border-radius: 5px;
                font-weight: bold;
            }
            .footer {
                background-color: #f1f1f1;
                text-align: center;
                padding: 15px;
                font-size: 13px;
                color: #777;
            }
            @media (max-width: 600px) {
                .content {
                    padding: 15px;
                }
                .post-title {
                    font-size: 18px;
                }
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="header">New Post Published!</div>
            <div class="content">
                <img src="' . esc_url($featured_image) . '" alt="Featured Image" />
                <h2 class="post-title">' . esc_html($post_title) . '</h2>
                <p class="post-date">📅 ' . esc_html($post_date) . '</p>
                <p class="post-excerpt">' . esc_html($post_excerpt) . '</p>
                <a class="btn" href="' . esc_url($post_url) . '" target="_blank">Read Full Post</a>
            </div>
            <div class="footer">
                Sent by ' . esc_html($author_name) . ' (' . esc_html($author_email) . ')<br>
                You are receiving this email because you are subscribed to our blog.
            </div>
        </div>
    </body>
    </html>
    ';

   // Set email headers
   $headers = array(
      'Content-Type: text/html; charset=UTF-8',
      'From: ' . $author_name . ' <' . $author_email . '>'
   );

   // Send email to each subscriber
   foreach ($subscribers as $subscriber) {
      wp_mail($subscriber->user_email, $subject, $message, $headers);
   }
}
