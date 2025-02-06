<template>
  <div class="feed">
    <div v-for="post in posts" :key="post.id" class="post">
      <img :src="post.image_url" alt="Post image" />
      <p>{{ post.caption }}</p>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      posts: []
    }
  },
  mounted() {
    this.fetchPosts()
  },
  methods: {
    async fetchPosts() {
      const response = await fetch('/api/posts')
      this.posts = await response.json()
    }
  }
}
</script>
