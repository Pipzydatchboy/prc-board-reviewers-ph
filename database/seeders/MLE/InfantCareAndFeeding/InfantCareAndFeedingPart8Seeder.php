<?php

namespace Database\Seeders\MLE\InfantCareAndFeeding;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class InfantCareAndFeedingPart8Seeder extends Seeder
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
        'part'        => 8,
        'question'    => "What is the recommended technique to clear an infant’s airway when choking?",
        'choices'     => json_encode([
            'Abdominal thrusts',
            'Back blows and chest thrusts',
            'Head tilt-chin lift',
            'Blind finger sweep',
        ]),
        'answer'      => 'Back blows and chest thrusts',
        'explanation' => 'Back blows followed by chest thrusts are recommended for infants under 1 year to clear airway obstruction.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //2
    [
        'subject_id'  => 29,
        'part'        => 8,
        'question'    => "At what age is it appropriate to introduce plain water in addition to breast milk or formula?",
        'choices'     => json_encode([
            '4 months',
            '6 months',
            '9 months',
            '12 months',
        ]),
        'answer'      => '6 months',
        'explanation' => 'Plain water may be introduced around 6 months when complementary foods are started to prevent dehydration.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //3
    [
        'subject_id'  => 29,
        'part'        => 8,
        'question'    => "What is a key benefit of offering an infant a pacifier?",
        'choices'     => json_encode([
            'Improves milk supply',
            'Reduces risk of SIDS',
            'Prevents colic',
            'Increases appetite',
        ]),
        'answer'      => 'Reduces risk of SIDS',
        'explanation' => 'Pacifier use during sleep has been associated with reduced risk of sudden infant death syndrome.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //4
    [
        'subject_id'  => 29,
        'part'        => 8,
        'question'    => "How often should an infant’s gums be cleaned before tooth eruption?",
        'choices'     => json_encode([
            'Once daily',
            'Twice daily',
            'Only after feeding',
            'Not necessary until teeth appear',
        ]),
        'answer'      => 'Twice daily',
        'explanation' => 'Cleaning gums twice daily with a soft cloth helps maintain oral hygiene before teeth emerge.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //5
    [
        'subject_id'  => 29,
        'part'        => 8,
        'question'    => "What defines responsive (cue-based) feeding?",
        'choices'     => json_encode([
            'Feeding on a strict schedule',
            'Feeding only at set intervals',
            'Feeding in response to hunger cues',
            'Feeding large volumes infrequently',
        ]),
        'answer'      => 'Feeding in response to hunger cues',
        'explanation' => 'Responsive feeding involves interpreting and responding promptly to an infant’s hunger and satiety signals.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //6
    [
        'subject_id'  => 29,
        'part'        => 8,
        'question'    => "Which characteristic differentiates gastroesophageal reflux from normal spit-up?",
        'choices'     => json_encode([
            'Volume less than 5 mL per feed',
            'No weight gain concern',
            'Persistent irritability and poor growth',
            'Occurs only during sleep',
        ]),
        'answer'      => 'Persistent irritability and poor growth',
        'explanation' => 'Pathologic reflux often presents with distress, feeding refusal, and growth failure, unlike benign spit-up.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //7
    [
        'subject_id'  => 29,
        'part'        => 8,
        'question'    => "What advantage does cup feeding have over bottle feeding?",
        'choices'     => json_encode([
            'Increases milk volume',
            'Enhances oral motor development',
            'Reduces feeding time',
            'Eliminates need for burping',
        ]),
        'answer'      => 'Enhances oral motor development',
        'explanation' => 'Cup feeding promotes tongue and lip movements essential for oral motor skill development.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //8
    [
        'subject_id'  => 29,
        'part'        => 8,
        'question'    => "Which sign warrants medical evaluation during complementary feeding?",
        'choices'     => json_encode([
            'Coughing occasionally',
            'Skin rash and vomiting',
            'Interest in new foods',
            'Drooling',
        ]),
        'answer'      => 'Skin rash and vomiting',
        'explanation' => 'Allergic reactions during feeding, such as rash and vomiting, require prompt medical assessment.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //9
    [
        'subject_id'  => 29,
        'part'        => 8,
        'question'    => "How should semisolid foods be introduced for safety?",
        'choices'     => json_encode([
            'Large chunks',
            'Smooth purees progressing to lumps',
            'Mixed with salt',
            'Only finger foods',
        ]),
        'answer'      => 'Smooth purees progressing to lumps',
        'explanation' => 'Start with smooth purees then gradually increase texture to reduce choking risk and support transition.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //10
    [
        'subject_id'  => 29,
        'part'        => 8,
        'question'    => "What is the appropriate response when an infant refuses a new food repeatedly?",
        'choices'     => json_encode([
            'Stop offering it permanently',
            'Increase portion size',
            'Offer small tastes without pressure',
            'Mix it with sweeteners',
        ]),
        'answer'      => 'Offer small tastes without pressure',
        'explanation' => 'Repeated gentle exposure without coercion supports acceptance over time.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //11
    [
        'subject_id'  => 29,
        'part'        => 8,
        'question'    => "Which vitamin supplement is recommended alongside solids at 6 months?",
        'choices'     => json_encode([
            'Vitamin A',
            'Vitamin D',
            'Vitamin E',
            'Vitamin K',
        ]),
        'answer'      => 'Vitamin D',
        'explanation' => 'Vitamin D supplementation (400 IU/day) is advised when breastfeeding continues beyond 6 months.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //12
    [
        'subject_id'  => 29,
        'part'        => 8,
        'question'    => "How can caregivers assess infant satiety during feeding?",
        'choices'     => json_encode([
            'Baby falls asleep abruptly',
            'Baby turns away and loses interest',
            'Baby cries vigorously',
            'Baby sucks vigorously with no pause',
        ]),
        'answer'      => 'Baby turns away and loses interest',
        'explanation' => 'Turning away is a reliable early satiety cue indicating the infant is full.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //13
    [
        'subject_id'  => 29,
        'part'        => 8,
        'question'    => "Which feeding position minimizes risk of aspiration?",
        'choices'     => json_encode([
            'Flat supine',
            'Prone lying',
            'Semi-upright',
            'Lateral recumbent',
        ]),
        'answer'      => 'Semi-upright',
        'explanation' => 'Semi-upright position helps control flow and reduces risk of aspiration during feeding.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //14
    [
        'subject_id'  => 29,
        'part'        => 8,
        'question'    => "Which sign indicates formula dilution error?",
        'choices'     => json_encode([
            'Adequate growth',
            'Excessive weight gain',
            'Normal stool pattern',
            'Good hydration',
        ]),
        'answer'      => 'Excessive weight gain',
        'explanation' => 'Over-diluted formula can lead to inadequate nutrition; concentrated formula may cause excessive weight gain.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //15
    [
        'subject_id'  => 29,
        'part'        => 8,
        'question'    => "What is the recommended daily frequency of wet diapers as a hydration indicator?",
        'choices'     => json_encode([
            '1-2 per day',
            '3-4 per day',
            '6-8 per day',
            '10-12 per day',
        ]),
        'answer'      => '6-8 per day',
        'explanation' => 'Six to eight wet diapers daily indicate adequate fluid intake in infants.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //16
    [
        'subject_id'  => 29,
        'part'        => 8,
        'question'    => "Which food should be introduced last due to high allergy risk?",
        'choices'     => json_encode([
            'Mashed banana',
            'Oat cereal',
            'Peanut products',
            'Steamed vegetables',
        ]),
        'answer'      => 'Peanut products',
        'explanation' => 'Introduce high-allergy-risk foods like peanuts after more common foods and under supervision.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //17

    [
        'subject_id'  => 29,
        'part'        => 8,
        'question'    => "Which indicator suggests overhydration in infants?",
        'choices'     => json_encode([
            'Sunken fontanelle',
            'Edema and weight gain',
            'Dry mucous membranes',
            'Decreased urine output',
        ]),
        'answer'      => 'Edema and weight gain',
        'explanation' => 'Excessive fluid intake may lead to weight gain and edema in infants.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //18
    [
        'subject_id'  => 29,
        'part'        => 8,
        'question'    => "What is the primary benefit of kangaroo mother care for feeding?",
        'choices'     => json_encode([
            'Reduces feeding frequency',
            'Enhances bonding and stimulates supply',
            'Eliminates need for formula',
            'Prevents milk let-down reflex',
        ]),
        'answer'      => 'Enhances bonding and stimulates supply',
        'explanation' => 'Skin-to-skin contact promotes milk production and strengthens mother-infant bond.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //19
    [
        'subject_id'  => 29,
        'part'        => 8,
        'question'    => "Which practice helps prevent nipple confusion?",
        'choices'     => json_encode([
            'Alternate breast and bottle every feed',
            'Delay bottle until breastfeeding established',
            'Use fast-flow nipple initially',
            'Offer pacifier early',
        ]),
        'answer'      => 'Delay bottle until breastfeeding established',
        'explanation' => 'Waiting 3–4 weeks before introducing bottle reduces risk of nipple confusion.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //20
    [
        'subject_id'  => 29,
        'part'        => 8,
        'question'    => "Which micronutrient powder can be added to complementary foods to prevent anemia?",
        'choices'     => json_encode([
            'Calcium powder',
            'Zinc powder',
            'Iron-fortified powder',
            'Vitamin C powder',
        ]),
        'answer'      => 'Iron-fortified powder',
        'explanation' => 'Adding iron-fortified micronutrient powder enhances iron intake during complementary feeding.',
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
            $this->command->warn("Part 8 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 8. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 8.");
    }
}
