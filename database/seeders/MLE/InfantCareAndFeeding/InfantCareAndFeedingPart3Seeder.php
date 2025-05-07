<?php

namespace Database\Seeders\MLE\InfantCareAndFeeding;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class InfantCareAndFeedingPart3Seeder extends Seeder
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
        'part'        => 3,
        'question'    => "Which sign suggests an infant is ready for solid foods?",
        'choices'     => json_encode([
            'Tongue thrust reflex present',
            'Sits with minimal support',
            'Closes mouth tightly',
            'Grasps spoon independently',
        ]),
        'answer'      => 'Sits with minimal support',
        'explanation' => 'Head and trunk control (sitting with support) indicates developmental readiness for solids.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //2
    [
        'subject_id'  => 29,
        'part'        => 3,
        'question'    => "What is the recommended seating position for infant solid feeding?",
        'choices'     => json_encode([
            'Reclined in caregiver\'s lap',
            'Upright in high chair',
            'Lying supine on table',
            'Side-lying on sofa',
        ]),
        'answer'      => 'Upright in high chair',
        'explanation' => 'An upright position reduces aspiration risk and facilitates swallowing.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //3
    [
        'subject_id'  => 29,
        'part'        => 3,
        'question'    => "Which cereal is recommended as a first solid food?",
        'choices'     => json_encode([
            'Rice cereal',
            'Wheat cereal',
            'Oat cereal',
            'Barley cereal',
        ]),
        'answer'      => 'Rice cereal',
        'explanation' => 'Iron-fortified rice cereal is low allergen and easy to digest.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //4
    [
        'subject_id'  => 29,
        'part'        => 3,
        'question'    => "How should semi-solid foods be prepared for infants starting solids?",
        'choices'     => json_encode([
            'Blended to smooth puree',
            'Chunky pieces',
            'Mixed with cow\'s milk',
            'Sprinkled with salt',
        ]),
        'answer'      => 'Blended to smooth puree',
        'explanation' => 'Pureed texture ensures easy swallowing and reduces choking risk.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //5
    [
        'subject_id'  => 29,
        'part'        => 3,
        'question'    => "Which practice reduces the risk of botulism in infant feeding?",
        'choices'     => json_encode([
            'Avoiding honey before 12 months',
            'Sterilizing jar lids only',
            'Feeding raw vegetables early',
            'Using unpasteurized juice',
        ]),
        'answer'      => 'Avoiding honey before 12 months',
        'explanation' => 'Honey can contain Clostridium botulinum spores that infants cannot combat.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //6
    [
        'subject_id'  => 29,
        'part'        => 3,
        'question'    => "What is the safe way to warm a bottle of expressed milk?",
        'choices'     => json_encode([
            'In a bowl of warm water',
            'In microwave directly',
            'On a hot stove',
            'Under direct sunlight',
        ]),
        'answer'      => 'In a bowl of warm water',
        'explanation' => 'Gentle warming in water preserves nutrients and prevents hot spots.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //7
    [
        'subject_id'  => 29,
        'part'        => 3,
        'question'    => "Which tool helps track infant feeding and growth?",
        'choices'     => json_encode([
            'Growth chart',
            'APGAR score',
            'Braden scale',
            'Morse scale',
        ]),
        'answer'      => 'Growth chart',
        'explanation' => 'Growth charts plot weight, length, and head circumference over time.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //8
    [
        'subject_id'  => 29,
        'part'        => 3,
        'question'    => "Which sign indicates possible aspiration during feeding?",
        'choices'     => json_encode([
            'Coughing and choking',
            'Quiet swallowing',
            'Regular breathing',
            'Happy feeding',
        ]),
        'answer'      => 'Coughing and choking',
        'explanation' => 'These reflexes signal that fluid may have entered the airway.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //9
    [
        'subject_id'  => 29,
        'part'        => 3,
        'question'    => "How often should feeding equipment be sterilized in the first month?",
        'choices'     => json_encode([
            'After each use',
            'Daily',
            'Weekly',
            'Monthly',
        ]),
        'answer'      => 'After each use',
        'explanation' => 'Sterilizing bottles and nipples after every use prevents infection.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //10
    [
        'subject_id'  => 29,
        'part'        => 3,
        'question'    => "What is a key characteristic of failure to thrive?",
        'choices'     => json_encode([
            'Consistent weight gain',
            'Weight below 5th percentile',
            'Rapid length increase',
            'Excessive head growth',
        ]),
        'answer'      => 'Weight below 5th percentile',
        'explanation' => 'Consistent weight below norms defines failure to thrive.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //11
    [
        'subject_id'  => 29,
        'part'        => 3,
        'question'    => "Which feeding rhythm supports self-regulation in infants?",
        'choices'     => json_encode([
            'Demand feeding',
            'One feed every 4 hours strictly',
            'Night-only feeding',
            'Fixed schedule with no flexibility',
        ]),
        'answer'      => 'Demand feeding',
        'explanation' => 'On-demand feeding allows infants to eat when hungry and self-regulate.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //12
    [
        'subject_id'  => 29,
        'part'        => 3,
        'question'    => "What is a common sign of overhydration in formula-fed infants?",
        'choices'     => json_encode([
            'Edema and weight gain',
            'Dry mucous membranes',
            'Sunken fontanelle',
            'Decreased urine output',
        ]),
        'answer'      => 'Edema and weight gain',
        'explanation' => 'Excess fluid intake causes fluid overload and edema.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //13
    [
        'subject_id'  => 29,
        'part'        => 3,
        'question'    => "Which food item is safest to introduce after cereals?",
        'choices'     => json_encode([
            'Mashed banana',
            'Whole grapes',
            'Peanuts',
            'Popcorn',
        ]),
        'answer'      => 'Mashed banana',
        'explanation' => 'Soft, mashed fruits reduce choking risk and are easy to digest.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //14
    [
        'subject_id'  => 29,
        'part'        => 3,
        'question'    => "What nutrient concern arises when infants transition off breastmilk?",
        'choices'     => json_encode([
            'Protein deficiency',
            'Iron deficiency',
            'Excessive vitamin D',
            'High lactose tolerance',
        ]),
        'answer'      => 'Iron deficiency',
        'explanation' => 'After 6 months, iron stores deplete; complementary foods must provide iron.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //15
    [
        'subject_id'  => 29,
        'part'        => 3,
        'question'    => "Which method reduces nipple trauma during breastfeeding?",
        'choices'     => json_encode([
            'Incorrect latch adjustment',
            'Compressing breast during latch',
            'Ensuring infant\'s mouth covers areola',
            'Short, shallow latch',
        ]),
        'answer'      => 'Ensuring infant\'s mouth covers areola',
        'explanation' => 'Deep latch prevents nipple damage and improves milk transfer.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //16
    [
        'subject_id'  => 29,
        'part'        => 3,
        'question'    => "What is a recommended strategy when an infant has difficulty latching?",
        'choices'     => json_encode([
            'Break suction and reposition',
            'Force the infant\'s head down',
            'Use a smaller nipple shield immediately',
            'Stop feeding entirely',
        ]),
        'answer'      => 'Break suction and reposition',
        'explanation' => 'Correct latch by gently breaking suction and re-latching reduces pain.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //17
    [
        'subject_id'  => 29,
        'part'        => 3,
        'question'    => "Which factor most influences breast milk composition?",
        'choices'     => json_encode([
            'Mother\'s diet and health',
            'Time of day only',
            'Gender of infant',
            'Room temperature',
        ]),
        'answer'      => 'Mother\'s diet and health',
        'explanation' => 'Maternal nutrition and health directly affect milk nutrient and immunologic profiles.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //18
    [
        'subject_id'  => 29,
        'part'        => 3,
        'question'    => "What practice helps avoid tongue-tie complications?",
        'choices'     => json_encode([
            'Early frenotomy evaluation',
            'Delaying latch attempts',
            'Avoiding feeding for first 24 hours',
            'Supplementing with formula only',
        ]),
        'answer'      => 'Early frenotomy evaluation',
        'explanation' => 'Assessing tongue function early prevents feeding difficulties.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //19
    [
        'subject_id'  => 29,
        'part'        => 3,
        'question'    => "Which indicator suggests adequate energy intake in infants?",
        'choices'     => json_encode([
            'Steady weight gain along growth curve',
            'Decreased diaper output',
            'Frequent crying',
            'Poor skin turgor',
        ]),
        'answer'      => 'Steady weight gain along growth curve',
        'explanation' => 'Consistent growth on standardized charts reflects sufficient intake.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //20
    [
        'subject_id'  => 29,
        'part'        => 3,
        'question'    => "Which approach supports mothers experiencing low milk supply?",
        'choices'     => json_encode([
            'Increase feeding intervals',
            'Use galactagogues under guidance',
            'Discourage breast emptying',
            'Stop breastfeeding early',
        ]),
        'answer'      => 'Use galactagogues under guidance',
        'explanation' => 'Certain herbs or medications can support lactation when used appropriately.',
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
            $this->command->warn("Part 3 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 3. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 3.");
    }
}
