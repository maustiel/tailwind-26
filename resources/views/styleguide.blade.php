<x-layouts.app title="Composants">
    <div class="mb-8">

    <h1 class="text-3xl font-semibold tracking-tight">Les composants du site</h1>

    <p class="mt-2 text-zinc-600">Chaque élément de l'interface, dans toutes ses variantes, sur une seule page.</p>

    </div>

    <div class="space-y-10">
        <section>
            <h2 class="text-xl font-semibold tracking-tight">Boutons</h2>
            <p class="mt-4 flex flex-wrap gap-3">
                <x-button>Enregistrer</x-button>
                <x-button variant="secondary">Annuler</x-button>
                <x-button variant="danger">Supprimer</x-button>
                <x-button disabled>Indisponible</x-button>
            </p>
        </section>

        <section>
            <h2>Statuts d'un prêt</h2>
            <p>
                <span>En cours</span>
                <span>En retard</span>
                <span>Rendu</span>
            </p>
        </section>

        <section>
            <h2>Carte</h2>
           <x-card class="mt-4 max-w-sm">
    <h3 class="font-semibold">Titre de la carte</h3>
    <p class="mt-2 text-sm text-zinc-600">Le contenu de la carte : un texte court, une liste ou une image.</p>
</x-card>
        </section>

    </div>
</x-layouts.app>
