<template>
    <div class="media-card" v-if="review && review.item">
        <h2>{{ review.item.title }}</h2>
        <p>{{ review.comment }}</p>
        <p>Rating: {{ review.rating }}/10</p>
        <!-- Ajoutez d'autres informations sur le média selon vos besoins -->
    </div>
    <div v-else>
        <!-- Affichez un message ou une indication appropriée si les données sont manquantes -->
        <p>Données de la critique manquantes.</p>
    </div>
</template>

<script>
export default {
    props: {
        review: {
            type: Object,
            required: true,
        },
    },
};
</script>

<style scoped>
.media-card {
    border: 1px solid #ddd;
    padding: 10px;
    margin-bottom: 15px;
}
</style>
