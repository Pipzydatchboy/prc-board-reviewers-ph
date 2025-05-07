<?php

namespace Database\Seeders\MLE\InfantCareAndFeeding;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class InfantCareAndFeedingPart4Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $now = Carbon::now();

//Questions Starts here... 
$batch = [];

$batch = [
    //1
    [
        'subject_id'  => 29,
        'part'        => 4,
        'question'    => "Which feeding technique helps manage infant colic?",
        'choices'     => json_encode([
            'Feeding rapidly',
            'Burping every ounce',
            'Supine feeding',
            'Using wide nipples',
        ]),
        'answer'      => 'Burping every ounce',
        'explanation' => 'Regular burping reduces swallowed air and may alleviate colic symptoms.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //2
    [
        'subject_id'  => 29,
        'part'        => 4,
        'question'    => "What is a sign of lactose intolerance in infants?",
        'choices'     => json_encode([
            'Steatorrhea',
            'Large, loose stools with gas',
            'Constipation',
            'Bloody stools',
        ]),
        'answer'      => 'Large, loose stools with gas',
        'explanation' => 'Lactose intolerance often causes loose, frothy stools and gas due to malabsorption.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //3
    [
        'subject_id'  => 29,
        'part'        => 4,
        'question'    => "Which complementary food is rich in iron for infants?",
        'choices'     => json_encode([
            'Mashed carrots',
            'Pureed lentils',
            'Mashed banana',
            'Rice cereal',
        ]),
        'answer'      => 'Pureed lentils',
        'explanation' => 'Lentils are high in iron and make an excellent introduction after cereals.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //4
    [
        'subject_id'  => 29,
        'part'        => 4,
        'question'    => "When transitioning to cup feeding, what is recommended?",
        'choices'     => json_encode([
            'Use a narrow-peeled rim cup',
            'Hold cup higher than lip',
            'Offer small sips at edge',
            'Pour quickly into mouth',
        ]),
        'answer'      => 'Offer small sips at edge',
        'explanation' => 'Small sips at the lip edge allow infants to lap without choking.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //5
    [
        'subject_id'  => 29,
        'part'        => 4,
        'question'    => "Which practice supports healthy oral motor development?",
        'choices'     => json_encode([
            'Thick purees only',
            'Encouraging chewing of soft finger foods',
            'Continued bottle use after 12 months',
            'Limiting texture progression',
        ]),
        'answer'      => 'Encouraging chewing of soft finger foods',
        'explanation' => 'Finger foods promote chewing skills and oral motor coordination.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //6
    [
        'subject_id'  => 29,
        'part'        => 4,
        'question'    => "What is the ideal ratio of bottle-fed formula concentrate?",
        'choices'     => json_encode([
            'One scoop per 2 oz water',
            'Two scoops per 2 oz water',
            'One scoop per 1 oz water',
            'Four scoops per 6 oz water',
        ]),
        'answer'      => 'One scoop per 2 oz water',
        'explanation' => 'Standard preparation ensures proper caloric density and nutrient balance.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //7
    [
        'subject_id'  => 29,
        'part'        => 4,
        'question'    => "Which sign indicates dehydration in infants?",
        'choices'     => json_encode([
            'Bulging fontanelle',
            'Sunken eyes and fontanelle',
            'Moist mucous membranes',
            'Frequent urination',
        ]),
        'answer'      => 'Sunken eyes and fontanelle',
        'explanation' => 'Depressed fontanelle and eyes signify reduced fluid volume.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //8
    [
        'subject_id'  => 29,
        'part'        => 4,
        'question'    => "What is the recommended daily water intake for breastfed infants older than 6 months?",
        'choices'     => json_encode([
            '100 mL',
            '200 mL',
            '50 mL',
            '300 mL',
        ]),
        'answer'      => '100 mL',
        'explanation' => 'Small amounts of water (around 100 mL) can be offered when solids are introduced.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //9
    [
        'subject_id'  => 29,
        'part'        => 4,
        'question'    => "Which nutrient deficiency is most common when exclusively breastfeeding beyond 6 months without solids?",
        'choices'     => json_encode([
            'Vitamin C',
            'Iron',
            'Calcium',
            'Vitamin A',
        ]),
        'answer'      => 'Iron',
        'explanation' => 'Breast milk iron is insufficient after 6 months; complementary foods must supply iron.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //10
    [
        'subject_id'  => 29,
        'part'        => 4,
        'question'    => "Which feeding issue may require frenotomy?",
        'choices'     => json_encode([
            'Excessive weight gain',
            'Persistent nipple pain',
            'Overhydration',
            'Frequent spitting up',
        ]),
        'answer'      => 'Persistent nipple pain',
        'explanation' => 'Tongue-tie can cause poor latch and maternal nipple trauma requiring evaluation.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //11
    [
        'subject_id'  => 29,
        'part'        => 4,
        'question'    => "Which schedule supports catch-up growth in underweight infants?",
        'choices'     => json_encode([
            'Frequent small feeds day and night',
            'One large feed every 6 hours',
            'Feeding only during daylight',
            'Skipping night feeds',
        ]),
        'answer'      => 'Frequent small feeds day and night',
        'explanation' => 'Regular, small-volume feeds support calorie intake and weight gain in undernourished infants.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //12
    [
        'subject_id'  => 29,
        'part'        => 4,
        'question'    => "What is a recommended method to supplant infant iron stores after 6 months?",
        'choices'     => json_encode([
            'Continue exclusive breastfeeding',
            'Introduce iron-fortified cereals',
            'Offer juice only',
            'Delay solid foods',
        ]),
        'answer'      => 'Introduce iron-fortified cereals',
        'explanation' => 'Iron-fortified cereals are a primary complementary source of iron for older infants.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //13
    [
        'subject_id'  => 29,
        'part'        => 4,
        'question'    => "Which evaluation tool monitors feeding efficiency in preterm infants?",
        'choices'     => json_encode([
            'PIPP (Premature Infant Pain Profile)',
            'FLACC scale',
            'Feed efficiency index (volume/time)',
            'APGAR score',
        ]),
        'answer'      => 'Feed efficiency index (volume/time)',
        'explanation' => 'This index measures milk transfer rate and feeding endurance in preterms.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //14
    [
        'subject_id'  => 29,
        'part'        => 4,
        'question'    => "Which maternal factor can reduce milk supply?",
        'choices'     => json_encode([
            'Adequate hydration',
            'Stress and fatigue',
            'Frequent emptying of breast',
            'Balanced diet',
        ]),
        'answer'      => 'Stress and fatigue',
        'explanation' => 'High stress and fatigue can inhibit prolactin and oxytocin release, reducing supply.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //15
    [
        'subject_id'  => 29,
        'part'        => 4,
        'question'    => "Which practice prevents bottle teething?",
        'choices'     => json_encode([
            'Allowing prolonged bottle use at bedtime',
            'Encouraging drinking from cup by 12 months',
            'Using flavored bottles only',
            'Skipping daytime feeds',
        ]),
        'answer'      => 'Encouraging drinking from cup by 12 months',
        'explanation' => 'Transitioning to cups reduces prolonged bottle exposure and teething issues.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //16
    [
        'subject_id'  => 29,
        'part'        => 4,
        'question'    => "Which additive is recommended in formula to support digestion?",
        'choices'     => json_encode([
            'Probiotics',
            'Added salt',
            'Sugars',
            'Caffeine',
        ]),
        'answer'      => 'Probiotics',
        'explanation' => 'Probiotic supplementation can support gut health and digestion in infants.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //17
    [
        'subject_id'  => 29,
        'part'        => 4,
        'question'    => "Which sign indicates infant reflux requiring evaluation?",
        'choices'     => json_encode([
            'Occasional spit-up',
            'Painful crying with feeds',
            'Colorless burping',
            'Hiccups only',
        ]),
        'answer'      => 'Painful crying with feeds',
        'explanation' => 'Reflux causing discomfort and feeding refusal should be assessed clinically.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //18
    [
        'subject_id'  => 29,
        'part'        => 4,
        'question'    => "What is the main benefit of human milk fortifier?",
        'choices'     => json_encode([
            'Reduces fat content',
            'Increases protein and calories',
            'Decreases calcium',
            'Adds caffeine',
        ]),
        'answer'      => 'Increases protein and calories',
        'explanation' => 'Fortifiers enhance caloric density and nutrients for premature infants.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //19
    [
        'subject_id'  => 29,
        'part'        => 4,
        'question'    => "Which practice helps prevent feeding aversions?",
        'choices'     => json_encode([
            'Force-feeding new foods',
            'Offering variety without pressure',
            'Limiting textures indefinitely',
            'Skipping meals when refused',
        ]),
        'answer'      => 'Offering variety without pressure',
        'explanation' => 'Gentle exposure to new tastes and textures builds positive feeding experiences.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //20
    [
        'subject_id'  => 29,
        'part'        => 4,
        'question'    => "Which assessment finding suggests adequate feeding in preterm infants?",
        'choices'     => json_encode([
            'Weight loss >10%',
            'Stable weight gain of 10–20 g/kg/day',
            'Decreased intake over time',
            'Minimal stool output',
        ]),
        'answer'      => 'Stable weight gain of 10–20 g/kg/day',
        'explanation' => 'Preterm growth goals are typically 10–20 g/kg daily gain.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
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
