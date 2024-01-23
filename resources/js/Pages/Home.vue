<template>
    <div>
        <h1>Dernières Critiques</h1>

        <div class="flex flex-col space-y-4 mt-5">
            <p v-if="reviews.length === 0">
                Aucune critique disponible pour le moment.
            </p>

            <MediaCard
                v-else
                v-for="review in reviews"
                :key="review.id"
                :review="review"
            />
        </div>

        <p>aaaaaaa</p>
    </div>
</template>

<script setup>
import MediaCard from "../Components/MediaCard.vue";

const props = defineProps(["reviews"]);
</script>
