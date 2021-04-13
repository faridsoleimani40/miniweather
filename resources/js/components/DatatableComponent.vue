<template>
  <div class="card">
      {{ test }}
  </div>
</template>

<script>
export default {
  data() {
    return {
       test : ''
    };
  },
  mounted () {
    axios
      .get('http://localhost:8000/api/dbfetch')
      .then(response => (this.test = response))
  }
};
</script>
