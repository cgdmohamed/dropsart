<?php

/**
 * comments template
 */
?>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <?php if (have_comments()) : ?>




                <div id="comments" class="comments-wrap comments-area">
                    <h3><?php
                        printf(
                            _nx('تعليق واحد "%2$s"', '%1$s على "%2$s"', get_comments_number(), 'comments title', 'dropsart'),
                            number_format_i18n(get_comments_number()),
                            '<span>' . get_the_title() . '</span>'
                        );
                        ?></h3>

                    <ul>
                        <?php
                        wp_list_comments(array(
                            'style'       => 'li',
                            'short_ping'  => false,
                            'avatar_size' => 74,
                        ));
                        ?>

                    </ul>
                </div>
        </div>
    <?php endif; // have_comments() 
    ?>

    <?php

    comment_form(
        array(
            'title_reply' => esc_html__('Leave a comment', 'dropsart'),
            'title_reply_before' => '<h2 id="reply-title" class="comment-reply-title">',
            'title_reply_after' => '</h2>',
            'class_submit' => 'submit default-btn page-btn',
            'comment_notes_before' => '',
            'fields' => array(
                'author' => '<input id="author" class="form-control" id="name" name="author" type="text" value="" placeholder="اسمك" required="required">',
                'email' => '<div class="col-lg-6 col-sm-6"><div class="form-group"><input type="email" id="email" class="form-control" name="email"></div></div>',
                'cookies' => '<div class="user-cookies"><input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" value="yes">
<label for="wp-comment-cookies-consent">' . __('Save my name, email, and website in this browser for the next time I comment.', 'dropsart') . '</label></div>'
            ),
            'comment_field' => '<div class="col-lg-12 col-md-12 mb-4"><div class="form-group"><textarea name="comment" id="comment" required="required" class="form-control" rows="8"></textarea></div></div>
            '

        )
    );
    ?>
    </div>
</div>