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
    </div>
</template>

<script setup>
// import MediaCard from "@/components/MediaCard.vue";
import { ref, onMounted } from "vue";
import { useInertia } from "@inertiajs/inertia-vue3";

const reviews = ref([]);

onMounted(async () => {
    const { data } = await useInertia("/api/reviews/latest");
    reviews.value = data;
});
</script>
