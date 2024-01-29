<template>
    <div>
        <h1>Dernières Critiques</h1>

        <div class="flex flex-col space-y-4 mt-5">
            <p v-if="reviews.length === 0">
                Aucune critique disponible pour le moment.
            </p>

            <p v-else>
                <MediaCard
                    v-for="review in reviews"
                    :key="review.id"
                    :review="review"
                />
            </p>
        </div>
    </div>
</template>

<script setup>
// import MediaCard from "@/components/MediaCard.vue";
import { defineProps } from "vue";

// Mock data for testing
const reviews = [
    {
        id: 1,
        media: { title: "Test Media" },
        comment: "This is a test comment.",
        rating: 9,
    },
    // Add more mock reviews if needed
];
const props = defineProps(["reviews"]);
</script>
