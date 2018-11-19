<template>
<div v-if="posts.length">
  <div class="panel panel-default" v-for="post in posts">
    <div class="blog-item">
      <p v-if="post.category_id === '1'" class="blog-category dairy">日記</p>
      <p v-if="post.category_id === '2'" class="blog-category programing">プログラミング</p>
      <p v-if="post.category_id === '3'" class="blog-category other">その他</p>
      <p class="blog-created">{{ post.created_at }}</p>
      <a class="blog-title" href="">{{ post.title }}</a>
      <div class="blog-body">{{ post.body }}</div>
      <div class="blog-comment">
        <!-- <p>コメント：{{ post.comments.count() }}</p> -->
      </div>
    </div>
  </div>
</div>
<div v-else>
  <p>記事がありません</p>
</div>
</template>

<script>
export default {
  props: ['posts'],
  data: function() {
    request: {

    }
  }
}
</script>
