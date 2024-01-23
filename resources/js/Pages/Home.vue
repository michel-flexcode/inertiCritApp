<template>
    <div>
        <h1>Dernières Critiques</h1>

        <div v-if="reviews.length === 0">
            <p>Aucune critique disponible pour le moment.</p>
        </div>

        <div v-else>
            <div v-for="review in reviews" :key="review.id">
                <MediaCard :media="review.media" :review="review" />
            </div>
        </div>
    </div>
</template>

<script>
import MediaCard from "@/components/MediaCard.vue";

export default {
    components: {
        MediaCard,
    },
    data() {
        return {
            reviews: [],
        };
    },
    mounted() {
        // Chargez les dernières critiques depuis votre API ici
        // Utilisez Inertia pour faire une requête à votre backend Laravel
        this.$inertia
            .get("/api/reviews/latest")
            .then((response) => {
                this.reviews = response.data;
            })
            .catch((error) => {
                console.error(
                    "Erreur lors de la récupération des critiques :",
                    error
                );
            });
    },
};
</script>
