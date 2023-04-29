<template>
    <div class="flex flex-col items-center justify-center h-screen">
      <p class="text-2xl mb-4">O contador está em: {{ contador }}</p>
      <button @click="incrementar" class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600">Incrementar</button>
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
  