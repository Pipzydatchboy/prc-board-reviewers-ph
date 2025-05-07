<?php

namespace Database\Seeders\MLE\InfantCareAndFeeding;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class InfantCareAndFeedingPart5Seeder extends Seeder
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
        'part'        => 5,
        'question'    => "What is the typical feeding volume for a healthy full-term newborn at 1 week of age?",
        'choices'     => json_encode([
            '30–60 mL per feed',
            '60–90 mL per feed',
            '90–120 mL per feed',
            '120–150 mL per feed',
        ]),
        'answer'      => '60–90 mL per feed',
        'explanation' => 'By one week, infants typically take about 60–90 mL per feeding every 2–3 hours.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //2
    [
        'subject_id'  => 29,
        'part'        => 5,
        'question'    => "Which feeding frequency is recommended for healthy term infants?",
        'choices'     => json_encode([
            'On demand, 8–12 times per 24 hours',
            'Fixed every 4 hours',
            'Every 6 hours only',
            'Once at bedtime',
        ]),
        'answer'      => 'On demand, 8–12 times per 24 hours',
        'explanation' => 'Feeding on demand 8–12 times daily supports growth and milk supply.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //3
    [
        'subject_id'  => 29,
        'part'        => 5,
        'question'    => "How long can freshly expressed breast milk be stored in a refrigerator (4°C)?",
        'choices'     => json_encode([
            'Up to 24 hours',
            'Up to 48 hours',
            'Up to 72 hours',
            'Up to 5 days',
        ]),
        'answer'      => 'Up to 5 days',
        'explanation' => 'Fresh breast milk can be refrigerated for up to 5 days at 4°C.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //4
    [
        'subject_id'  => 29,
        'part'        => 5,
        'question'    => "What is the maximum recommended storage time for breast milk in a deep freezer (–18°C)?",
        'choices'     => json_encode([
            '3 months',
            '6 months',
            '9 months',
            '12 months',
        ]),
        'answer'      => '6 months',
        'explanation' => 'In a deep freezer, breast milk is best used within 6 months for optimal quality.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //5
    [
        'subject_id'  => 29,
        'part'        => 5,
        'question'    => "Which intervention supports feeding in infants with tongue-tie?",
        'choices'     => json_encode([
            'Early frenotomy evaluation',
            'Increase bottle flow rate',
            'Use narrow-neck bottles',
            'Delay feeding until 1 month',
        ]),
        'answer'      => 'Early frenotomy evaluation',
        'explanation' => 'Assessing and releasing tongue-tie early improves latch and feeding efficiency.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //6
    [
        'subject_id'  => 29,
        'part'        => 5,
        'question'    => "What is a key sign of feeding intolerance in infants?",
        'choices'     => json_encode([
            'Adequate weight gain',
            'Frequent, forceful vomiting',
            'Regular soft stools',
            'Content after feeding',
        ]),
        'answer'      => 'Frequent, forceful vomiting',
        'explanation' => 'Projectile vomiting suggests intolerance or obstruction requiring evaluation.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //7
    [
        'subject_id'  => 29,
        'part'        => 5,
        'question'    => "Which strategy aids feeding for infants with gastroesophageal reflux?",
        'choices'     => json_encode([
            'Upright positioning during and after feeds',
            'Supine flat after feeding',
            'Rapid bolus feeds',
            'Adding cereal to formula only',
        ]),
        'answer'      => 'Upright positioning during and after feeds',
        'explanation' => 'Keeping infants upright reduces reflux episodes.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //8
    [
        'subject_id'  => 29,
        'part'        => 5,
        'question'    => "Which formula concentration is appropriate for term infants?",
        'choices'     => json_encode([
            'One scoop per 2 oz water',
            'Two scoops per 2 oz water',
            'One scoop per 1 oz water',
            'Any concentration as tolerated',
        ]),
        'answer'      => 'One scoop per 2 oz water',
        'explanation' => 'Standard formula prep ensures balanced nutrients and osmolality.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //9
    [
        'subject_id'  => 29,
        'part'        => 5,
        'question'    => "At what age can infants typically start using an open cup for fluids?",
        'choices'     => json_encode([
            '4 months',
            '6 months',
            '8 months',
            '12 months',
        ]),
        'answer'      => '6 months',
        'explanation' => 'Around 6 months, infants have the motor skills to lap from a cup.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //10
    [
        'subject_id'  => 29,
        'part'        => 5,
        'question'    => "Which nutrient is most critical to supplement in exclusively breastfed infants?",
        'choices'     => json_encode([
            'Vitamin A',
            'Vitamin D',
            'Vitamin C',
            'Vitamin E',
        ]),
        'answer'      => 'Vitamin D',
        'explanation' => 'Breast milk is low in vitamin D; 400 IU daily prevents rickets.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //11
    [
        'subject_id'  => 29,
        'part'        => 5,
        'question'    => "How often should bottles and nipples be sterilized for infants under 3 months?",
        'choices'     => json_encode([
            'After each use',
            'Daily',
            'Weekly',
            'Monthly',
        ]),
        'answer'      => 'After each use',
        'explanation' => 'Sterilizing after every use prevents infections in young infants.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //12
    [
        'subject_id'  => 29,
        'part'        => 5,
        'question'    => "Which practice reduces gas during bottle feeding?",
        'choices'     => json_encode([
            'Hold bottle horizontally',
            'Use anti-colic nipples',
            'Shake vigorously',
            'Feed in supine position',
        ]),
        'answer'      => 'Use anti-colic nipples',
        'explanation' => 'Anti-colic nipples reduce air ingestion during feeding.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //13
    [
        'subject_id'  => 29,
        'part'        => 5,
        'question'    => "Which sign indicates proper latch in breastfeeding?",
        'choices'     => json_encode([
            'Asymmetrical mouth shape',
            'Lips flanged outward',
            'Nose pressed against breast',
            'Soft suction sound',
        ]),
        'answer'      => 'Lips flanged outward',
        'explanation' => 'Everted lips and a wide gape indicate a deep, effective latch.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //14
    [
        'subject_id'  => 29,
        'part'        => 5,
        'question'    => "What is the expected stool pattern for exclusively breastfed infants?",
        'choices'     => json_encode([
            'One stool every 3 days',
            'Multiple soft, mustard-colored stools per day',
            'Hard formed stools once daily',
            'No stools for 1 week',
        ]),
        'answer'      => 'Multiple soft, mustard-colored stools per day',
        'explanation' => 'Breastfed infants often stool several times daily with soft, yellow stools.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //15
    [
        'subject_id'  => 29,
        'part'        => 5,
        'question'    => "Which practice supports milk supply during maternal separation?",
        'choices'     => json_encode([
            'Reduce pump sessions',
            'Pump at regular intervals matching feeds',
            'Pump once daily only',
            'Skip pumping if busy',
        ]),
        'answer'      => 'Pump at regular intervals matching feeds',
        'explanation' => 'Maintaining regular emptying mimics feeding and sustains supply.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //16
    [
        'subject_id'  => 29,
        'part'        => 5,
        'question'    => "Which intervention helps soothe a fussy, gassy infant?",
        'choices'     => json_encode([
            'Rapid arm movement',
            'Gentle tummy massage',
            'Cold compress on abdomen',
            'Supine jostling',
        ]),
        'answer'      => 'Gentle tummy massage',
        'explanation' => 'Circular massage can help move and release trapped gas.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //17
    [
        'subject_id'  => 29,
        'part'        => 5,
        'question'    => "Which feeding aid is recommended for cleft lip/palate infants?",
        'choices'     => json_encode([
            'Standard bottle',
            'Specialty orthodontic nipples',
            'Wide-neck jar',
            'Rigid straw',
        ]),
        'answer'      => 'Specialty orthodontic nipples',
        'explanation' => 'Orthodontic nipples improve feeding and reduce aspiration risk.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //18
    [
        'subject_id'  => 29,
        'part'        => 5,
        'question'    => "Which sign suggests an infant is overfed?",
        'choices'     => json_encode([
            'Content between feeds',
            'Frequent spit-up and distress',
            'Steady weight gain',
            'Calm feeding behavior',
        ]),
        'answer'      => 'Frequent spit-up and distress',
        'explanation' => 'Overfeeding often leads to gastrointestinal discomfort and frequent spitting up.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //19
    [
        'subject_id'  => 29,
        'part'        => 5,
        'question'    => "Which approach supports gradual weaning from breast?",
        'choices'     => json_encode([
            'Immediate cessation',
            'Replace one feed at a time with cup feeds',
            'Offer solids only while breastfeeding',
            'Stop nighttime feeds first only',
        ]),
        'answer'      => 'Replace one feed at a time with cup feeds',
        'explanation' => 'Gradual replacement eases transition and emotional adjustment.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //20
    [
        'subject_id'  => 29,
        'part'        => 5,
        'question'    => "Which immunization is given at 2 months to support infant health?",
        'choices'     => json_encode([
            'Rotavirus vaccine',
            'MMR vaccine',
            'Influenza vaccine',
            'HPV vaccine',
        ]),
        'answer'      => 'Rotavirus vaccine',
        'explanation' => 'Rotavirus vaccination at 2 months protects against severe diarrhea.',
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
