
<template>
    
<div>
  <notification-error :error-data="registerData.error"></notification-error>

  <div class="flex h-[calc(100vh-84px)] flex-1 items-center justify-center px-4 py-12 sm:px-6 lg:px-8">
    <div class="w-full max-w-sm space-y-10">
      <div>
        <img class="mx-auto h-10 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company" />
        <h2 class="mt-6 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Registre-se!</h2>
        <a :href="registerData.paths.login" class="text-center block mt-2 text-sm font-medium text-indigo-600 hover:text-indigo-500">
          <span aria-hidden="true"> &larr;</span>
          Voltar ao login
        </a>
      </div>
      <form class="space-y-6" :action="registerData.paths.register" method="POST">
        <input type="hidden" name="_token" :value="registerData.csrfToken">    
      
        <div>
          <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Nome Completo</label>
          <div class="mt-2">
            <input id="name" name="name" type="text" autocomplete="name" required="" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
          </div>
        </div>

        <div>
          <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email</label>
          <div class="mt-2">
            <input id="email" name="email" type="email" autocomplete="email" required="" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
          </div>
        </div>

        <div>
          <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Senha</label>
          <div class="mt-2">
            <input id="password" name="password" type="password" autocomplete="current-password" required="" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
          </div>
        </div>

        <div>
          <div class="flex items-center justify-between">
            <label for="password-confirm" class="block text-sm font-medium leading-6 text-gray-900">Confirmar Senha</label>
          </div>
          <div class="mt-2">
            <input id="password-confirm" name="password_confirmation" type="password" autocomplete="current-password" required="" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
          </div>
        </div>

        <div>
          <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Registrar</button>
        </div>
      </form>

    </div>
  </div>
</div>

</template>
  
  <script>
  export default {
    props: {
      registerData: {
        type: Object,
        required: true,
      },
    },
  }
  </script>
  