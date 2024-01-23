<template>
    <div class="media-card">
        <h2>{{ review.media.title }}</h2>
        <p>{{ review.comment }}</p>
        <p>Rating: {{ review.rating }}/10</p>
        <!-- Ajoutez d'autres informations sur le média selon vos besoins -->
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
