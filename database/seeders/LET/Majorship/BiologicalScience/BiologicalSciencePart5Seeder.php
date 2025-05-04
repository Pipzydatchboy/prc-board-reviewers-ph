<?php

namespace Database\Seeders\LET\Majorship\BiologicalScience;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class BiologicalSciencePart5Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $now = Carbon::now();

       //Question Starts Here...
       $batch = [];

        // Part 5 – Question 81
        $batch[] = [
            'subject_id'   => 20,
            'part'         => 5,
            'question'     => 'Which hormone is primarily responsible for the “fight or flight” response?',
            'choices'      => json_encode([
                'Cortisol',
                'Insulin',
                'Adrenaline',
                'Thyroxine',
            ]),
            'answer'       => 'Adrenaline',
            'explanation'  => "Adrenaline (epinephrine) is released by the adrenal medulla to prepare the body for acute stress.",
            'created_at'   => $now,
            'updated_at'   => $now,
        ];

        // Part 5 – Question 82
        $batch[] = [
            'subject_id'   => 20,
            'part'         => 5,
            'question'     => 'Which phylum includes spiny-skinned marine animals like sea stars?',
            'choices'      => json_encode([
                'Annelida',
                'Mollusca',
                'Arthropoda',
                'Echinodermata',
            ]),
            'answer'       => 'Echinodermata',
            'explanation'  => "Echinoderms have pentaradial symmetry and a water vascular system.",
            'created_at'   => $now,
            'updated_at'   => $now,
        ];

        // Part 5 – Question 83
        $batch[] = [
            'subject_id'   => 20,
            'part'         => 5,
            'question'     => 'Which process describes the uptake of water by plant roots driven by osmotic pressure?',
            'choices'      => json_encode([
                'Transpiration',
                'Osmosis',
                'Active transport',
                'Capillarity',
            ]),
            'answer'       => 'Osmosis',
            'explanation'  => "Water moves from soil into root cells via osmosis across semipermeable membranes.",
            'created_at'   => $now,
            'updated_at'   => $now,
        ];

        // Part 5 – Question 84
        $batch[] = [
            'subject_id'   => 20,
            'part'         => 5,
            'question'     => 'Which gas molecule is the final electron acceptor in aerobic respiration?',
            'choices'      => json_encode([
                'Carbon dioxide',
                'Oxygen',
                'Water',
                'NAD+',
            ]),
            'answer'       => 'Oxygen',
            'explanation'  => "Oxygen accepts electrons at the end of the electron transport chain, forming water.",
            'created_at'   => $now,
            'updated_at'   => $now,
        ];

        // Part 5 – Question 85
        $batch[] = [
            'subject_id'   => 20,
            'part'         => 5,
            'question'     => 'Which type of muscle tissue is involuntary and non-striated?',
            'choices'      => json_encode([
                'Skeletal muscle',
                'Cardiac muscle',
                'Smooth muscle',
                'Myogenic muscle',
            ]),
            'answer'       => 'Smooth muscle',
            'explanation'  => "Smooth muscle lacks striations and is controlled by the autonomic nervous system.",
            'created_at'   => $now,
            'updated_at'   => $now,
        ];

        // Part 5 – Question 86
        $batch[] = [
            'subject_id'   => 20,
            'part'         => 5,
            'question'     => 'Which pigment absorbs light most effectively in the blue-violet and red regions?',
            'choices'      => json_encode([
                'Chlorophyll a',
                'Chlorophyll b',
                'Carotene',
                'Xanthophyll',
            ]),
            'answer'       => 'Chlorophyll a',
            'explanation'  => "Chlorophyll a is the primary pigment that absorbs light for photosynthesis.",
            'created_at'   => $now,
            'updated_at'   => $now,
        ];

        // Part 5 – Question 87
        $batch[] = [
            'subject_id'   => 20,
            'part'         => 5,
            'question'     => 'Which structure in bacteria confers resistance to harsh conditions?',
            'choices'      => json_encode([
                'Flagellum',
                'Capsule',
                'Endospore',
                'Pili',
            ]),
            'answer'       => 'Endospore',
            'explanation'  => "Endospores are dormant structures that withstand extreme heat and desiccation.",
            'created_at'   => $now,
            'updated_at'   => $now,
        ];

        // Part 5 – Question 88
        $batch[] = [
            'subject_id'   => 20,
            'part'         => 5,
            'question'     => 'Which nervous system subdivision controls voluntary movements?',
            'choices'      => json_encode([
                'Autonomic nervous system',
                'Central nervous system',
                'Somatic nervous system',
                'Enteric nervous system',
            ]),
            'answer'       => 'Somatic nervous system',
            'explanation'  => "The somatic system transmits signals to skeletal muscles for voluntary actions.",
            'created_at'   => $now,
            'updated_at'   => $now,
        ];

        // Part 5 – Question 89
        $batch[] = [
            'subject_id'   => 20,
            'part'         => 5,
            'question'     => 'Which macromolecule class includes enzymes and antibodies?',
            'choices'      => json_encode([
                'Carbohydrates',
                'Lipids',
                'Proteins',
                'Nucleic acids',
            ]),
            'answer'       => 'Proteins',
            'explanation'  => "Proteins serve structural, catalytic, and defense roles in organisms.",
            'created_at'   => $now,
            'updated_at'   => $now,
        ];

        // Part 5 – Question 90
        $batch[] = [
            'subject_id'   => 20,
            'part'         => 5,
            'question'     => 'Which ecological pyramid shows the decreasing biomass at each trophic level?',
            'choices'      => json_encode([
                'Energy pyramid',
                'Biomass pyramid',
                'Pyramid of numbers',
                'Pyramid of productivity',
            ]),
            'answer'       => 'Biomass pyramid',
            'explanation'  => "Biomass pyramids illustrate the total mass of organisms at each level.",
            'created_at'   => $now,
            'updated_at'   => $now,
        ];

        // Part 5 – Question 91
        $batch[] = [
            'subject_id'   => 20,
            'part'         => 5,
            'question'     => 'Which genetic disorder is caused by a trisomy of chromosome 21?',
            'choices'      => json_encode([
                'Turner syndrome',
                'Down syndrome',
                'Klinefelter syndrome',
                'Edward syndrome',
            ]),
            'answer'       => 'Down syndrome',
            'explanation'  => "Down syndrome results from an extra copy of chromosome 21.",
            'created_at'   => $now,
            'updated_at'   => $now,
        ];

        // Part 5 – Question 92
        $batch[] = [
            'subject_id'   => 20,
            'part'         => 5,
            'question'     => 'Which term describes the random fluctuation of allele frequencies in small populations?',
            'choices'      => json_encode([
                'Gene flow',
                'Natural selection',
                'Genetic drift',
                'Mutation',
            ]),
            'answer'       => 'Genetic drift',
            'explanation'  => "Genetic drift leads to allele frequency changes due to chance events.",
            'created_at'   => $now,
            'updated_at'   => $now,
        ];

        // Part 5 – Question 93
        $batch[] = [
            'subject_id'   => 20,
            'part'         => 5,
            'question'     => 'Which plant tissue transports sugars from leaves to roots?',
            'choices'      => json_encode([
                'Xylem',
                'Phloem',
                'Cambium',
                'Epidermis',
            ]),
            'answer'       => 'Phloem',
            'explanation'  => "Phloem conducts photosynthates throughout the plant.",
            'created_at'   => $now,
            'updated_at'   => $now,
        ];

        // Part 5 – Question 94
        $batch[] = [
            'subject_id'   => 20,
            'part'         => 5,
            'question'     => 'Which enzyme breaks down starch into maltose in the mouth?',
            'choices'      => json_encode([
                'Pepsin',
                'Amylase',
                'Lipase',
                'Trypsin',
            ]),
            'answer'       => 'Amylase',
            'explanation'  => "Salivary amylase begins starch digestion in the oral cavity.",
            'created_at'   => $now,
            'updated_at'   => $now,
        ];

        // Part 5 – Question 95
        $batch[] = [
            'subject_id'   => 20,
            'part'         => 5,
            'question'     => 'Which process in ecology refers to the sequential replacement of species?',
            'choices'      => json_encode([
                'Succession',
                'Competition',
                'Predation',
                'Symbiosis',
            ]),
            'answer'       => 'Succession',
            'explanation'  => "Ecological succession describes community changes over time after disturbance.",
            'created_at'   => $now,
            'updated_at'   => $now,
        ];

        // Part 5 – Question 96
        $batch[] = [
            'subject_id'   => 20,
            'part'         => 5,
            'question'     => 'Which structure in viruses allows attachment to host cells?',
            'choices'      => json_encode([
                'Envelope',
                'Capsid',
                'Tail fibers',
                'Nucleocapsid',
            ]),
            'answer'       => 'Tail fibers',
            'explanation'  => "Bacteriophage tail fibers bind to receptors on bacterial cell walls.",
            'created_at'   => $now,
            'updated_at'   => $now,
        ];

        // Part 5 – Question 97
        $batch[] = [
            'subject_id'   => 20,
            'part'         => 5,
            'question'     => 'Which leaf structure regulates gas exchange in plants?',
            'choices'      => json_encode([
                'Cuticle',
                'Stomata',
                'Veins',
                'Mesophyll',
            ]),
            'answer'       => 'Stomata',
            'explanation'  => "Stomata are pores flanked by guard cells to control gas exchange.",
            'created_at'   => $now,
            'updated_at'   => $now,
        ];

        // Part 5 – Question 98
        $batch[] = [
            'subject_id'   => 20,
            'part'         => 5,
            'question'     => 'Which system in humans includes the spleen and thymus?',
            'choices'      => json_encode([
                'Endocrine system',
                'Lymphatic system',
                'Circulatory system',
                'Digestive system',
            ]),
            'answer'       => 'Lymphatic system',
            'explanation'  => "The lymphatic system comprises lymph nodes, spleen, thymus, and lymphatic vessels.",
            'created_at'   => $now,
            'updated_at'   => $now,
        ];

        // Part 5 – Question 99
        $batch[] = [
            'subject_id'   => 20,
            'part'         => 5,
            'question'     => 'Which hormone stimulates uterine contractions during childbirth?',
            'choices'      => json_encode([
                'Prolactin',
                'Oxytocin',
                'Progesterone',
                'Estrogen',
            ]),
            'answer'       => 'Oxytocin',
            'explanation'  => "Oxytocin triggers smooth muscle contraction in the uterus.",
            'created_at'   => $now,
            'updated_at'   => $now,
        ];

        // Part 5 – Question 100
        $batch[] = [
            'subject_id'   => 20,
            'part'         => 5,
            'question'     => 'Which ecological term describes non-native species that negatively impact ecosystems?',
            'choices'      => json_encode([
                'Keystone species',
                'Invasive species',
                'Endemic species',
                'Pioneer species',
            ]),
            'answer'       => 'Invasive species',
            'explanation'  => "Invasive species establish and spread, outcompeting native organisms.",
            'created_at'   => $now,
            'updated_at'   => $now,
        ];
    


        // Retrieve existing questions to detect duplicates
        $existing = DB::table('questions')
            ->pluck('question')
            ->map(fn($q) => trim($q))
            ->all();

        // Check for duplicates against DB
        $dupes = [];
        foreach ($batch as $item) {
            if (in_array(trim($item['question']), $existing, true)) {
                $dupes[] = $item;
            }
        }

        $batchCount = count($batch);

        // 1) Inform about duplicates
        if (!empty($dupes)) {
            $this->command->warn("Detected " . count($dupes) . " duplicate question(s):");
            foreach ($dupes as $d) {
                $this->command->warn("  - {$d['question']}");
            }
        }

        // 2) Inform if question count is less than required
        if ($batchCount < 20) {
            $this->command->warn("Part 5 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 5. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 5.");
    }
}
