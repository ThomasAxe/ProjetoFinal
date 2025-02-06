<template>
  <div class="upload">
    <input type="file" @change="handleFileUpload" />
    <textarea v-model="caption" placeholder="Escreva uma legenda..."></textarea>
    <button @click="submitPost">Publicar</button>
  </div>
</template>

<script>
export default {
  data() {
    return {
      file: null,
      caption: ''
    }
  },
  methods: {
    handleFileUpload(event) {
      this.file = event.target.files[0]
    },
    async submitPost() {
      const formData = new FormData()
      formData.append('image', this.file)
      formData.append('caption', this.caption)

      await fetch('/api/posts', {
        method: 'POST',
        body: formData,
      })

      this.$router.push('/')
    }
  }
}
</script>
