<template>
  <div>
    <p>O contador está em: {{ contador }}</p>
    <button @click="incrementar">Incrementar</button>
  </div>
</template>

<script>
export default {
  data() {
    return {
      contador: 0,
    };
  },
  methods: {
    incrementar() {
      this.contador++;
    },
  },
};
</script>
