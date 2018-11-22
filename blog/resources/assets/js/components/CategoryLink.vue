<template>
<div>
  <a :class="[selected_category === 0 ? 'selected category-link':'category-link']" href="/">ホーム</a>
  <a :class="[selected_category === 1 ? 'selected category-link':'category-link']" href="/posts/category/1">日記</a>
  <a :class="[selected_category === 2 ? 'selected category-link':'category-link']" href="/posts/category/2">プログラミング</a>
  <a :class="[selected_category === 3 ? 'selected category-link':'category-link']" href="/posts/category/3">その他</a>
</div>
</template>

<script>
export default {
   props: {
     selected_category: Number
   }
}
</script>
