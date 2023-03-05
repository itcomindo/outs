<?php
defined('ABSPATH') || exit;

function mnel_show_comment_form() {
    // if comment open show comment form
    if (comments_open()) {
        $comment_form = '<div class="globalCommentFormWr">';
        $comment_form .= '<h3 class="globalCommentFormTitle">' . __('Leave a Reply', 'mn') . '</h3>';
        $comment_form .= '<form action="' . get_option('siteurl') . '/wp-comments-post.php" method="post" id="commentform">';
        $comment_form .= '<div class="globalCommentFormFieldsWr">';
        $comment_form .= '<div class="globalCommentFormFieldWr">';
        $comment_form .= '<input type="text" name="author" id="author" value="" placeholder="' . __('Name', 'mn') . '" />';
        $comment_form .= '</div>';
        $comment_form .= '<div class="globalCommentFormFieldWr">';
        $comment_form .= '<input type="text" name="email" id="email" value="" placeholder="' . __('Email', 'mn') . '" />';
        $comment_form .= '</div>';
        $comment_form .= '<div class="globalCommentFormFieldWr">';
        $comment_form .= '<input type="text" name="url" id="url" value="" placeholder="' . __('Website', 'mn') . '" />';
        $comment_form .= '</div>';
        $comment_form .= '</div>';
        $comment_form .= '<div class="globalCommentFormTextareaWr">';
        $comment_form .= '<textarea name="comment" id="comment" placeholder="' . __('Comment', 'mn') . '"></textarea>';
        $comment_form .= '</div>';
        $comment_form .= '<div class="globalCommentFormSubmitWr">';
        $comment_form .= '<input name="submit" type="submit" id="submit" value="' . __('Submit', 'mn') . '" />';
        $comment_form .= '</div>';
        $comment_form .= '</form>';
        $comment_form .= '</div>';
        return $comment_form;
    }
}

// post comments
function mnel_show_post_comments() {
    $postID = mncore_postID();
    $comments = get_comments(array(
        'post_id' => $postID,
        'status' => 'approve'
    ));
    $comments_count = count($comments);
    $comments_list = '';
    if ($comments_count > 0) {
        $comments_list .= '<div class="globalPostCommentsWr">';
        $comments_list .= '<h3 class="globalPostCommentsTitle">' . __('Comments', 'mn') . '</h3>';
        $comments_list .= '<div class="globalPostCommentsListWr">';
        foreach ($comments as $comment) {
            $comments_list .= '<div class="globalPostCommentWr">';
            $comments_list .= '<div class="globalPostCommentAvatarWr">';
            $comments_list .= get_avatar($comment, 60);
            $comments_list .= '</div>';
            $comments_list .= '<div class="globalPostCommentContentWr">';
            $comments_list .= '<div class="globalPostCommentAuthorWr">';
            $comments_list .= '<span class="globalPostCommentAuthor">' . $comment->comment_author . '</span>';
            $comments_list .= '</div>';
            $comments_list .= '<div class="globalPostCommentDateWr">';
            $comments_list .= '<span class="globalPostCommentDate">' . get_comment_date('F j, Y', $comment) . '</span>';
            $comments_list .= '</div>';
            $comments_list .= '<div class="globalPostCommentTextWr">';
            $comments_list .= '<span class="globalPostCommentText">' . $comment->comment_content . '</span>';
            $comments_list .= '</div>';
            $comments_list .= '</div>';
            $comments_list .= '</div>';
        }
        $comments_list .= '</div>';
        $comments_list .= '</div>';
    }
    return $comments_list;
}

