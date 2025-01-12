<template>
    <div class="container mx-auto p-6">
      <h1 class="text-3xl font-bold text-gray-800 mb-6">Réservation</h1>
      <SelectionChambre />
      <InformationsReservation />
      <Paiement />
    </div>
  </template>
  
  <script>
  import SelectionChambre from '@/components/reservation/SelectionChambre.vue';
  import InformationsReservation from '@/components/reservation/InformationsReservation.vue';
  import Paiement from '@/components/reservation/Paiement.vue';
  
  export default {
    components: {
      SelectionChambre,
      InformationsReservation,
      Paiement
    }
  }
  </script>
  
  <style scoped>
  /* Ajout de style pour une meilleure organisation */
  .container {
    max-width: 1200px;
  }
  </style>