<?php

namespace Database\Seeders\LET\Majorship\TVTED;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class TVTEDPart4Seeder extends Seeder
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

       // Part 4 – Agriculture & Fishery – Question 1
       $batch[] = [
           'subject_id'   => 17,
           'part'         => 4,
           'question'     => 'What is the optimal soil pH range for most field crops?',
           'choices'      => json_encode([
               '6.0–7.5',
               '4.5–5.5',
               '7.8–9.0',
               '5.0–6.0',
           ]),
           'answer'       => '6.0–7.5',
           'explanation'  => 'Most crops grow best in slightly acidic to neutral soils (pH 6.0–7.5).',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Question 2
       $batch[] = [
           'subject_id'   => 17,
           'part'         => 4,
           'question'     => 'Which practice involves planting different crops sequentially on the same field to maintain soil fertility?',
           'choices'      => json_encode([
               'Crop rotation',
               'Monoculture',
               'Intercropping',
               'Terracing',
           ]),
           'answer'       => 'Crop rotation',
           'explanation'  => 'Crop rotation prevents nutrient depletion and breaks pest cycles.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Question 3
       $batch[] = [
           'subject_id'   => 17,
           'part'         => 4,
           'question'     => 'Which organic fertilizer is produced by decomposed livestock manure and bedding materials?',
           'choices'      => json_encode([
               'Compost',
               'Urea',
               'Ammonium nitrate',
               'Superphosphate',
           ]),
           'answer'       => 'Compost',
           'explanation'  => 'Compost is made from decomposed organic matter including manure and bedding.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Question 4
       $batch[] = [
           'subject_id'   => 17,
           'part'         => 4,
           'question'     => 'Which irrigation method delivers water directly to the plant root zone, minimizing evaporation?',
           'choices'      => json_encode([
               'Drip irrigation',
               'Flood irrigation',
               'Sprinkler irrigation',
               'Furrow irrigation',
           ]),
           'answer'       => 'Drip irrigation',
           'explanation'  => 'Drip systems apply water slowly at the root, reducing water loss.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Question 5
       $batch[] = [
           'subject_id'   => 17,
           'part'         => 4,
           'question'     => 'Which insect pest commonly affects rice by feeding on leaf tissue, causing ‘‘whiteheads’’?',
           'choices'      => json_encode([
               'Rice stem borer',
               'Fall armyworm',
               'Corn earworm',
               'Aphid',
           ]),
           'answer'       => 'Rice stem borer',
           'explanation'  => 'Rice stem borer larvae tunnel stems, leading to whiteheads in panicles.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Question 6
       $batch[] = [
           'subject_id'   => 17,
           'part'         => 4,
           'question'     => 'What advantage does greenhouse cultivation provide for horticultural crops?',
           'choices'      => json_encode([
               'Controlled environment year-round',
               'Reduced light intensity',
               'Increased pest pressure',
               'Lower humidity levels',
           ]),
           'answer'       => 'Controlled environment year-round',
           'explanation'  => 'Greenhouses regulate light, temperature, and humidity for consistent production.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Question 7
       $batch[] = [
           'subject_id'   => 17,
           'part'         => 4,
           'question'     => 'Which integrated pest management (IPM) strategy uses natural predators to control pests?',
           'choices'      => json_encode([
               'Biological control',
               'Chemical control',
               'Cultural control',
               'Mechanical control',
           ]),
           'answer'       => 'Biological control',
           'explanation'  => 'IPM biological control releases or conserves predators to regulate pest populations.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Question 8
       $batch[] = [
           'subject_id'   => 17,
           'part'         => 4,
           'question'     => 'What is ‘‘harvest index’’ in crop production?',
           'choices'      => json_encode([
               'Ratio of harvested yield to total biomass',
               'Time between planting and harvest',
               'Percentage of grains damaged',
               'Depth of root system',
           ]),
           'answer'       => 'Ratio of harvested yield to total biomass',
           'explanation'  => 'Harvest index measures efficiency of converting biomass into economic yield.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Question 9
       $batch[] = [
           'subject_id'   => 17,
           'part'         => 4,
           'question'     => 'Which seed certification ensures genetic purity and germination standards?',
           'choices'      => json_encode([
               'Certified Seed',
               'Breeder Seed',
               'Foundation Seed',
               'Farm-Saved Seed',
           ]),
           'answer'       => 'Certified Seed',
           'explanation'  => 'Certified seeds meet regulated standards for variety purity and viability.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Question 10
       $batch[] = [
           'subject_id'   => 17,
           'part'         => 4,
           'question'     => 'Which process converts organic farm waste into nutrient-rich soil amendment?',
           'choices'      => json_encode([
               'Composting',
               'Pasteurization',
               'Fermentation',
               'Sublimation',
           ]),
           'answer'       => 'Composting',
           'explanation'  => 'Composting decomposes organic matter, producing humus for soil health.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Question 11
       $batch[] = [
           'subject_id'   => 17,
           'part'         => 4,
           'question'     => 'Which fish species is most commonly cultured in freshwater ponds in the Philippines?',
           'choices'      => json_encode([
               'Tilapia',
               'Milkfish',
               'Catfish',
               'Carp',
           ]),
           'answer'       => 'Tilapia',
           'explanation'  => 'Tilapia is widely farmed due to fast growth and adaptability.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Question 12
       $batch[] = [
           'subject_id'   => 17,
           'part'         => 4,
           'question'     => 'What is the recommended stocking density for tilapia fingerlings in earthen ponds (fish/m²)?',
           'choices'      => json_encode([
               '2–4',
               '10–12',
               '0.5–1',
               '8–10',
           ]),
           'answer'       => '2–4',
           'explanation'  => 'Stocking 2–4 fry per m² balances growth and water quality.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Question 13
       $batch[] = [
           'subject_id'   => 17,
           'part'         => 4,
           'question'     => 'Which water quality parameter is critical to aeration and fish survival, measured in mg/L?',
           'choices'      => json_encode([
               'Dissolved oxygen',
               'pH level',
               'Turbidity',
               'Hardness',
           ]),
           'answer'       => 'Dissolved oxygen',
           'explanation'  => 'Adequate dissolved oxygen (>5 mg/L) is essential for fish respiration.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Question 14
       $batch[] = [
           'subject_id'   => 17,
           'part'         => 4,
           'question'     => 'Which aquaponics system combines fish culture with hydroponic plant production?',
           'choices'      => json_encode([
               'Aquaponics',
               'Raceway system',
               'Recirculating aquaculture',
               'Pond polyculture',
           ]),
           'answer'       => 'Aquaponics',
           'explanation'  => 'Aquaponics recirculates fish waste nutrients to support plant growth.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Question 15
       $batch[] = [
           'subject_id'   => 17,
           'part'         => 4,
           'question'     => 'What does the feed conversion ratio (FCR) indicate in fish farming?',
           'choices'      => json_encode([
               'Amount of feed required per unit of weight gain',
               'Oxygen consumption rate',
               'Number of fish per pond area',
               'pH change over time',
           ]),
           'answer'       => 'Amount of feed required per unit of weight gain',
           'explanation'  => 'FCR measures feed efficiency: lower ratios indicate better conversion.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Question 16
       $batch[] = [
           'subject_id'   => 17,
           'part'         => 4,
           'question'     => 'Which water pH range is ideal for most freshwater aquaculture species?',
           'choices'      => json_encode([
               '6.5–8.5',
               '4.0–5.5',
               '8.0–9.5',
               '5.0–6.0',
           ]),
           'answer'       => '6.5–8.5',
           'explanation'  => 'pH 6.5–8.5 supports healthy fish metabolism and water chemistry.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Question 17
       $batch[] = [
           'subject_id'   => 17,
           'part'         => 4,
           'question'     => 'Which management practice prevents fish disease by maintaining water flow and oxygenation?',
           'choices'      => json_encode([
               'Aeration',
               'Aerobic digestion',
               'Flocculation',
               'Algal bloom',
           ]),
           'answer'       => 'Aeration',
           'explanation'  => 'Aeration increases dissolved oxygen, reducing stress and disease risk.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Question 18
       $batch[] = [
           'subject_id'   => 17,
           'part'         => 4,
           'question'     => 'What is cage culture in fisheries?',
           'choices'      => json_encode([
               'Raising fish in net enclosures in open water',
               'Growing algae on substrates',
               'Harvesting wild fish stocks',
               'Draining ponds seasonally',
           ]),
           'answer'       => 'Raising fish in net enclosures in open water',
           'explanation'  => 'Cage culture confines fish in floating nets for easier management and harvest.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Question 19
       $batch[] = [
           'subject_id'   => 17,
           'part'         => 4,
           'question'     => 'Which post-harvest practice reduces bacterial growth in fish products?',
           'choices'      => json_encode([
               'Icing immediately after harvest',
               'Drying at ambient temperature',
               'Sun exposure',
               'Salt curing only',
           ]),
           'answer'       => 'Icing immediately after harvest',
           'explanation'  => 'Rapid cooling by ice preserves freshness and inhibits spoilage.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       // Question 20
       $batch[] = [
           'subject_id'   => 17,
           'part'         => 4,
           'question'     => 'Which sustainable practice integrates crop and fish production to maximize resource use?',
           'choices'      => json_encode([
               'Agro-aquaculture',
               'Monocropping',
               'Shifting cultivation',
               'Slash and burn',
           ]),
           'answer'       => 'Agro-aquaculture',
           'explanation'  => 'Combining aquaculture and agriculture optimizes water and nutrient cycles.',
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
            $this->command->warn("Part 4 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 4. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 4.");
    }
}
