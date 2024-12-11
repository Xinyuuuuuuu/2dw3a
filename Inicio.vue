<template>
  <div class="bg-[#C6ABFC] h-screen flex flex-col items-center justify-center min-h-screen pb-24 font-teko relative">
    <!-- Contenedor de usuario -->
    <div class="absolute top-4 right-4 flex items-center space-x-2">
      <!-- Imagen de perfil -->
      <img src="../../../public/img/user_profile.png" alt="Foto de perfil"
        class="w-12 h-12 rounded-full border-2 border-[#8C52FF] shadow-md cursor-pointer" @click="toggleMenu" />
      <!-- Nombre del usuario con flecha -->
      <div class="flex items-center space-x-1 cursor-pointer" @click="toggleMenu">
        <span class="text-[#3D3D3D] text-lg font-bold">{{ userName }}</span>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-[#3D3D3D]" fill="none" viewBox="0 0 24 24"
          stroke="currentColor" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
        </svg>
      </div>
      <!-- Menú desplegable -->
      <div v-if="menuVisible"
        class="absolute top-14 right-0 bg-white shadow-lg rounded-lg py-2 w-52 border border-gray-200 z-50">
        <button class="w-full text-left px-4 py-2 text-gray-700 hover:bg-gray-100 flex items-center"
          @click="navigateTo('editar_perfil')">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-[#8C52FF]" viewBox="0 0 20 20"
            fill="currentColor">
            <path
              d="M17.414 2.586a2 2 0 00-2.828 0l-10 10A2 2 0 004 14v3a1 1 0 001 1h3a2 2 0 001.414-.586l10-10a2 2 0 000-2.828zM12 7l-1 1 2 2 1-1-2-2zM5 13v-1.586l8-8L14.586 5l-8 8H5z" />
          </svg>
          Editar tu perfil
        </button>
        <button class="w-full text-left px-4 py-2 text-gray-700 hover:bg-gray-100 flex items-center"
          @click="navigateTo('administrar_perfiles')">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
            class="size-5 text-[#8C52FF]" fill="curretColor">
            <path stroke-linecap="round" stroke-linejoin="round"
              d="M21.75 6.75a4.5 4.5 0 0 1-4.884 4.484c-1.076-.091-2.264.071-2.95.904l-7.152 8.684a2.548 2.548 0 1 1-3.586-3.586l8.684-7.152c.833-.686.995-1.874.904-2.95a4.5 4.5 0 0 1 6.336-4.486l-3.276 3.276a3.004 3.004 0 0 0 2.25 2.25l3.276-3.276c.256.565.398 1.192.398 1.852Z" />
            <path stroke-linecap="round" stroke-linejoin="round" d="M4.867 19.125h.008v.008h-.008v-.008Z" />
          </svg>
          Administrar perfiles
        </button>
        <button class="w-full text-left px-4 py-2 text-gray-700 hover:bg-gray-100 flex items-center"
          @click="cerrarSesion">
          <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="size-5 text-[#8C52FF]" fill="curretColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
          </svg>
          Cerrar sesión
        </button>
      </div>
    </div>

    <!--NEON BASIC shadow-[0_0_2px_#fff,inset_0_0_2px_#fff,0_0_5px_#8C52FF,0_0_15px_#8C52FF,0_0_30px_#8C52FF] -->
    <!-- Contenedor principal -->
    <div class="flex flex-col items-center justify-center space-y-8">
      <!-- Imagen centrada -->
      <img src="../../../public/img/CounterHack_LARGO.png" alt="Logo" class="w-4/5">
      <!-- Botones centrados -->
      <div class="space-y-4 flex flex-col items-center">
        <button
          class="w-96 py-3 bg-[#8C52FF] text-white text-3xl font-semibold rounded-lg  hover:bg-[#945eff] text-center"
          @click="navigateTo('iniciar_sesion')">
          Iniciar sesión
        </button>
        <button
          class="w-96 py-3 bg-[#8C52FF] text-white text-3xl font-semibold rounded-lg  hover:bg-[#945eff] text-center"
          @click="navigateTo('registro')">
          Registrarse
        </button>
        <button
          class="w-96 py-3 bg-[#8C52FF] text-white text-3xl font-semibold rounded-lg hover:bg-[#945eff] text-center"
          @click="navigateTo('scoreboard')">
          Scoreboard
        </button>
        <button
          class="w-96 py-3 bg-[#8C52FF] text-white text-3xl font-semibold rounded-lg  hover:bg-[#945eff] text-center"
          @click="navigateTo('sobre_nosotros')">
          Sobre nosotros
        </button>
      </div>
    </div>
  </div>
</template>

<script>
import { ref, onMounted, watch } from "vue";
import { useRoute, useRouter } from "vue-router";

export default {
  name: "Inicio",
  setup() {
    const route = useRoute();
    const router = useRouter();
    const userName = ref("Patrick Deba"); // Nombre del usuario (puedes obtenerlo de tu estado o API)
    const menuVisible = ref(false);

    const updateTitle = () => {
      const title = route.meta.title || "CounterHack";
      document.title = title;
    };

    const navigateTo = (routeName) => {
      router.push({ name: routeName });
    };

    const cerrarSesion = () => {
      navigateTo("inicio");
    };

    const toggleMenu = () => {
      menuVisible.value = !menuVisible.value;
    };

    onMounted(updateTitle);

    watch(route, () => {
      updateTitle();
    });

    return { navigateTo, userName, menuVisible, toggleMenu, cerrarSesion };
  },
};
</script>
