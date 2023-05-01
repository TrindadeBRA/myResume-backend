
<template>
  <div>

    <notification-error :error-data="loginData.error"></notification-error>

    <div class="flex h-[calc(100vh-84px)] flex-1 items-center justify-center px-4 py-12 sm:px-6 lg:px-8">
      
      <div class="w-full max-w-sm space-y-10">
        <div>
          <img class="mx-auto h-10 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company" />
          <h2 class="mt-6 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Conecte-se</h2>
        </div>

        <form class="space-y-6" :action="loginData.paths.login" method="POST">
          <input type="hidden" name="_token" :value="loginData.csrfToken">    

          <div>
            <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email</label>
            <div class="mt-2">
              <input id="email" name="email" type="email" autocomplete="email" required="" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
            </div>
          </div>

          <div>
            <div class="flex items-center justify-between">
              <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Senha</label>
            </div>
            <div class="mt-2">
              <input id="password" name="password" type="password" autocomplete="current-password" required="" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
            </div>
          </div>

          <div class="flex items-center justify-between">
            <div class="flex items-center">
              <input id="remember" name="remember" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600" />
              <label for="remember" class="ml-3 block text-sm leading-6 text-gray-900">Manter contectado?</label>
            </div>

            <div class="text-sm leading-6">
              <a :href="loginData.paths.passwordRequest" class="font-semibold text-indigo-600 hover:text-indigo-500">Esqueci a senha</a>
            </div>
          </div>

          <div>
            <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Acessar</button>
            <a :href="loginData.paths.register" class="mt-4 flex w-full justify-center rounded-md bg-white border border-solid border-indigo-600 border-2 px-3 py-1.5 text-sm font-semibold leading-6 text-indigo-600 shadow-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-gray-600">Registre-se</a>
          </div>


        </form>
  
      </div>

    </div>
  </div>
</template>
  

  <script>
  export default {
    props: {
      loginData: {
        type: Object,
        required: true,
      },
    },
    methods: {

    }
  }
  </script>
  