<template>
  <section class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
    <form :action="certificateData.paths.actionForm" method="POST">
      <div class="space-y-12">
        <div class="border-b border-white/10 pb-12">
          
          <h2 class="text-base font-semibold leading-7 text-white">Informações do certificado</h2>
          <p class="mt-1 text-sm leading-6 text-gray-400">Preencha todas as Informações obrigatórias.</p>
          
          <p></p>
          
          <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
            
            <input type="hidden" name="_token" :value="certificateData.csrfToken">
            <input type="hidden" name="_method" value="PUT">

            <div class="sm:col-span-full">
              <label for="certificate-title" class="block text-sm font-medium leading-6 text-white">Título do certificado:</label>
              <div class="mt-2">
                <div class="flex rounded-md bg-white/5 ring-1 ring-inset ring-white/10 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-500 px-2 py-0">
                  <input type="text" name="certificate-title" id="certificate-title" autocomplete="certificate-title" class="flex-1 border-0 bg-transparent py-1.5 pl-1 text-white focus:ring-0 sm:text-sm sm:leading-6" placeholder="Digite aqui..." :value="certificateData.certificateData['certificate-title']"/>
                </div>
              </div>
            </div>

            <div class="sm:col-span-full">
              <label for="certificate-origin" class="block text-sm font-medium leading-6 text-white">Instituição de Ensino</label>
              <div class="mt-2">
                <div class="flex rounded-md bg-white/5 ring-1 ring-inset ring-white/10 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-500 px-2 py-0">
                  <input type="text" name="certificate-origin" id="certificate-origin" autocomplete="certificate-origin" class="flex-1 border-0 bg-transparent py-1.5 pl-1 text-white focus:ring-0 sm:text-sm sm:leading-6" placeholder="Digite aqui..." :value="certificateData.certificateData['certificate-origin']"/>
                </div>
              </div>
            </div>


            <div class="sm:col-span-full">
              <label for="certificate-instructor" class="block text-sm font-medium leading-6 text-white">Professor / Instrutor</label>
              <div class="mt-2">
                <div class="flex rounded-md bg-white/5 ring-1 ring-inset ring-white/10 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-500 px-2 py-0">
                  <input type="text" name="certificate-instructor" id="certificate-instructor" autocomplete="certificate-instructor" class="flex-1 border-0 bg-transparent py-1.5 pl-1 text-white focus:ring-0 sm:text-sm sm:leading-6" placeholder="Digite aqui..." :value="certificateData.certificateData['certificate-instructor']"/>
                </div>
              </div>
            </div>

            <div class="sm:col-span-full">
              <label for="certificate-date" class="block text-sm font-medium leading-6 text-white">Data de conclusão do certificado:</label>
              <div class="mt-2">
                <div class="flex rounded-md bg-white/5 ring-1 ring-inset ring-white/10 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-500 px-2 py-0">
                  <input type="date" name="certificate-date" id="certificate-date" autocomplete="certificate-date" class="flex-1 border-0 bg-transparent py-1.5 pl-1 text-white focus:ring-0 sm:text-sm sm:leading-6" placeholder="Digite aqui..." :value="certificateData.certificateData['certificate-date']"/>
                </div>
              </div>
            </div>

            <!-- <div class="col-span-full">
              <label for="learning-list" class="block text-sm font-medium leading-6 text-white">Lista de aprendizagem:</label>
              <div class="mt-2">
                <textarea id="learning-list" name="learning-list" rows="3" class="block w-full rounded-md border-0 bg-white/5 py-1.5 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6" />
              </div>
            </div> -->

            <div class="sm:col-span-full">
              <label for="certificate-url" class="block text-sm font-medium leading-6 text-white">URL da imagem do certificado:</label>
              <div class="mt-2">
                <div class="flex rounded-md bg-white/5 ring-1 ring-inset ring-white/10 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-500 px-2 py-0">
                  <input type="url" name="certificate-url" id="certificate-url" autocomplete="certificate-url" class="flex-1 border-0 bg-transparent py-1.5 pl-1 text-white focus:ring-0 sm:text-sm sm:leading-6" placeholder="Digite aqui..." :value="certificateData.certificateData['certificate-url']"/>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>

      <div class="mt-6 flex items-center justify-end gap-x-6">
        <!-- <button type="button" class="text-sm font-semibold leading-6 text-white">Cancel</button> -->
        <button type="submit" class="rounded-md bg-indigo-500 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Salvar</button>
      </div>
    </form>
  </section>
</template>

<script setup>
import { PhotoIcon, UserCircleIcon } from '@heroicons/vue/24/solid'
</script>

<script>
export default {
  props: {
    certificateData: {
      type: Object,
      required: true,
    },
  },
  methods: {

  }
}
</script>
