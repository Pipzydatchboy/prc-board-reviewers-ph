<?php

namespace Database\Seeders\MLE\InfantCareAndFeeding;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class InfantCareAndFeedingPart7Seeder extends Seeder
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
        'part'        => 7,
        'question'    => "What percentage of birth weight loss is considered normal in the first 5 days?",
        'choices'     => json_encode([
            'Up to 5%',
            'Up to 10%',
            'Up to 15%',
            'Up to 20%',
        ]),
        'answer'      => 'Up to 10%',
        'explanation' => 'Healthy newborns may lose up to 10% of birth weight before regaining.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //2
    [
        'subject_id'  => 29,
        'part'        => 7,
        'question'    => "What is the safest method to rewarm refrigerated breast milk?",
        'choices'     => json_encode([
            'Microwave directly',
            'Bowl of warm water',
            'Boiling water immersion',
            'Room temperature standing',
        ]),
        'answer'      => 'Bowl of warm water',
        'explanation' => 'Gently warming in a water bath preserves nutrients and avoids hot spots.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //3
    [
        'subject_id'  => 29,
        'part'        => 7,
        'question'    => "After thawing frozen breast milk, how long may it be stored in the refrigerator?",
        'choices'     => json_encode([
            '6 hours',
            '12 hours',
            '24 hours',
            '48 hours',
        ]),
        'answer'      => '24 hours',
        'explanation' => 'Thawed breast milk is safe for up to 24 hours in the fridge and should not be refrozen.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //4
    [
        'subject_id'  => 29,
        'part'        => 7,
        'question'    => "Mixed formula left at room temperature should be used within: ",
        'choices'     => json_encode([
            '30 minutes',
            '1 hour',
            '2 hours',
            '4 hours',
        ]),
        'answer'      => '2 hours',
        'explanation' => 'Prepared formula at room temperature may harbor bacteria after 2 hours.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //5
    [
        'subject_id'  => 29,
        'part'        => 7,
        'question'    => "What is the recommended total daily fluid intake for a healthy term infant?",
        'choices'     => json_encode([
            '100–120 mL/kg/day',
            '120–150 mL/kg/day',
            '150–200 mL/kg/day',
            '200–250 mL/kg/day',
        ]),
        'answer'      => '150–200 mL/kg/day',
        'explanation' => 'Adequate hydration and feeding support 150–200 mL per kg daily in infants.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //6
    [
        'subject_id'  => 29,
        'part'        => 7,
        'question'    => "Which nutrient in breast milk is vital for neuronal development?",
        'choices'     => json_encode([
            'Lactose',
            'DHA',
            'Casein',
            'Vitamin K',
        ]),
        'answer'      => 'DHA',
        'explanation' => 'DHA is an omega-3 fatty acid crucial for brain and retinal development.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //7
    [
        'subject_id'  => 29,
        'part'        => 7,
        'question'    => "Good latch during breastfeeding is indicated by: ",
        'choices'     => json_encode([
            'Puckering of lips',
            'Lips flanged outward',
            'Shallow suck',
            'No audible swallowing',
        ]),
        'answer'      => 'Lips flanged outward',
        'explanation' => 'Everted lips and a wide gape signal a deep, effective latch.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //8
    [
        'subject_id'  => 29,
        'part'        => 7,
        'question'    => "Which practice helps prevent nipple trauma?",
        'choices'     => json_encode([
            'Short, shallow latch',
            'Compress breast during latch',
            'Ensure areola is in mouth',
            'Feed only on one side each time',
        ]),
        'answer'      => 'Ensure areola is in mouth',
        'explanation' => 'A deep latch covering the areola reduces friction and trauma.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //9
    [
        'subject_id'  => 29,
        'part'        => 7,
        'question'    => "Which reflex protects against choking when introducing solids?",
        'choices'     => json_encode([
            'Rooting reflex',
            'Gag reflex',
            'Moro reflex',
            'Palmar reflex',
        ]),
        'answer'      => 'Gag reflex',
        'explanation' => 'The gag reflex prevents aspiration by expelling items at the back of the tongue.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //10
    [
        'subject_id'  => 29,
        'part'        => 7,
        'question'    => "Stage 1 bottle nipples typically allow flow at what rate?",
        'choices'     => json_encode([
            '1 drop/second',
            '2 drops/second',
            '4 drops/second',
            'Continuous flow',
        ]),
        'answer'      => '1 drop/second',
        'explanation' => 'Slow-flow nipples mimic breastfeeding rates and help prevent overfeeding.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //11
    [
        'subject_id'  => 29,
        'part'        => 7,
        'question'    => "What is baby-led weaning?",
        'choices'     => json_encode([
            'Puree feeding only',
            'Infant self-feeding solid pieces',
            'Delayed solids until 1 year',
            'Exclusive bottle feeds',
        ]),
        'answer'      => 'Infant self-feeding solid pieces',
        'explanation' => 'This approach lets infants explore and eat solid pieces themselves.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //12
    [
        'subject_id'  => 29,
        'part'        => 7,
        'question'    => "Which food is a choking hazard for infants?",
        'choices'     => json_encode([
            'Mashed avocado',
            'Whole grapes',
            'Cooked carrots',
            'Soft bananas',
        ]),
        'answer'      => 'Whole grapes',
        'explanation' => 'Grapes must be cut into small pieces to prevent choking.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //13
    [
        'subject_id'  => 29,
        'part'        => 7,
        'question'    => "Recommended frequency of complementary solid feeds at 7 months is: ",
        'choices'     => json_encode([
            'Once daily',
            '2–3 times daily',
            '5–6 times daily',
            'Only on demand',
        ]),
        'answer'      => '2–3 times daily',
        'explanation' => 'Complementary solids 2–3 times per day complement milk feeds at this age.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //14
    [
        'subject_id'  => 29,
        'part'        => 7,
        'question'    => "Which skill demonstrates readiness for finger foods?",
        'choices'     => json_encode([
            'Pincer grasp',
            'Vertical raking grasp',
            'Fisting only',
            'Palmar press grasp',
        ]),
        'answer'      => 'Pincer grasp',
        'explanation' => 'The pincer grasp allows infants to pick up small food pieces safely.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //15
    [
        'subject_id'  => 29,
        'part'        => 7,
        'question'    => "Daily iron requirement for infants after 6 months is approximately (mg/kg):",
        'choices'     => json_encode([
            '0.5',
            '1',
            '2',
            '4',
        ]),
        'answer'      => '1',
        'explanation' => 'After 6 months, infants need about 1 mg/kg/day of iron to prevent deficiency.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //16
    [
        'subject_id'  => 29,
        'part'        => 7,
        'question'    => "Which practice supports milk supply during maternal work hours?",
        'choices'     => json_encode([
            'Pump every visit home',
            'Pump at scheduled intervals',
            'Skip pumping when tired',
            'Reduce pump sessions gradually',
        ]),
        'answer'      => 'Pump at scheduled intervals',
        'explanation' => 'Regular pumping every 3–4 hours maintains supply during separation.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //17
    [
        'subject_id'  => 29,
        'part'        => 7,
        'question'    => "Which method reduces aerophagia in bottle-fed infants?",
        'choices'     => json_encode([
            'Hold bottle steeply',
            'Use anti-colic nipple and paced feeding',
            'Shake bottle frequently',
            'Feed in supine position',
        ]),
        'answer'      => 'Use anti-colic nipple and paced feeding',
        'explanation' => 'Controlled flow and vented nipples minimize air ingestion.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //18
    [
        'subject_id'  => 29,
        'part'        => 7,
        'question'    => "Which sign indicates milk ejection reflex during breastfeeding?",
        'choices'     => json_encode([
            'Tingling sensation in breast',
            'Decreased milk flow',
            'Breast firmness',
            'Infant fussiness',
        ]),
        'answer'      => 'Tingling sensation in breast',
        'explanation' => 'A tingling or pins-and-needles feeling signals let-down and milk ejection.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //19
    [
        'subject_id'  => 29,
        'part'        => 7,
        'question'    => "What is the primary immunologic benefit of colostrum?",
        'choices'     => json_encode([
            'High IgA content',
            'High fat content',
            'High lactose content',
            'High casein content',
        ]),
        'answer'      => 'High IgA content',
        'explanation' => 'Colostrum is rich in secretory IgA, protecting the infant’s gut from pathogens.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //20
    [
        'subject_id'  => 29,
        'part'        => 7,
        'question'    => "Which supplement is recommended for preterm infants receiving human milk?",
        'choices'     => json_encode([
            'Calcium',
            'Phosphate',
            'Iron',
            'Vitamin C',
        ]),
        'answer'      => 'Phosphate',
        'explanation' => 'Human milk fortifiers often add phosphate to support bone mineralization in preterm infants.',
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
            $this->command->warn("Part 7 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 7. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 7.");
    }
}
