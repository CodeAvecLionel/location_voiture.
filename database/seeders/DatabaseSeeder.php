<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([
            [ 'phone' => '+39 351 077 5935', 'adresse' => 'A108 Adam Street, New York, NY 535022', 'email' => 'contact@herzt.com', 
                'desc_site' => 'Bienvenue sur Herzt - Votre Destination de Location de Voitures. Découvrez l\'ultime expérience de location de voitures avec Herzt, votre partenaire de confiance pour tous vos besoins de déplacement. Que vous planifiez un voyage 
                d\'affaires, des vacances en famille ou une escapade spontanée, notre plateforme conviviale simplifie le processus de location de voiture, offrant une gamme diversifiée de véhicules pour répondre à vos exigences spécifiques.',
                'flotte_de_voiture' => 'Parcourez notre vaste sélection de véhicules de la dernière technologie et du plus haut standing. Des berlines élégantes aux SUV spacieux, nous avons la voiture parfaite pour chaque occasion.',
                'tarifs_competitif' => ' profitez de tarifs de location compétitifs, adaptés à tous les budgets. Notre système de tarification transparent vous assure de bénéficier du meilleur rapport qualité-prix, sans frais cachés.',
                'facilite_de_reservation_en_ligne' => 'Réservez votre voiture en quelques clics grâce à notre processus de réservation en ligne simple et intuitif. Ajoutez des options supplémentaires, choisissez votre lieu de prise en charge et de restitution, le tout depuis le confort de votre domicile.'
                ,'service_clientele' => ' Notre équipe dévouée est disponible 24/7 pour répondre à vos questions et vous assister à chaque étape de votre voyage. Nous sommes là pour vous offrir une expérience sans souci.', 
                'assurance_securite' => 'Votre sécurité est notre priorité. Toutes nos voitures sont régulièrement entretenues et inspectées pour garantir des trajets sûrs et fiables. De plus, nous proposons une gamme d\'options d\'assurance pour vous offrir une tranquillité d\'esprit totale.',
                'programe_de_facilite' => 'Rejoignez notre programme de fidélité pour bénéficier d\'offres exclusives, de mises à niveau gratuites et de réductions spéciales. Chez Herzt, nous récompensons votre fidélité.', 
                'appel_a_laction' => 'Qu\'attendez-vous ? Réservez dès aujourd\'hui votre voiture idéale sur Herzt et préparez-vous à vivre une expérience de location de voitures inoubliable. Nous sommes là pour vous aider à atteindre votre destination, où que la route puisse vous mene.',
                'nos_marques' => 'Nous disposons des meilleures marques telles que :',  'personnel' => 'Nous disposons de plusieurs membres du personnel tels que des mécaniciens, des chauffeurs, etc.',  'partenaire' => 'Nos partenaires les plus sollicités.',],
        ]);

    }
}
