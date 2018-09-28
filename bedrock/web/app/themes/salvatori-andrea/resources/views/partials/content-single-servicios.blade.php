<article @php post_class() @endphp>

    <div class="entry-content">
        @php the_content() @endphp
    </div>
    @php comments_template('/partials/comments.blade.php') @endphp
</article>
