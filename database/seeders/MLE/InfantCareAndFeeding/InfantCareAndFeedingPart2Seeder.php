<?php

namespace Database\Seeders\MLE\InfantCareAndFeeding;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class InfantCareAndFeedingPart2Seeder extends Seeder
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
        'part'        => 2,
        'question'    => "Which sign indicates breast engorgement?",
        'choices'     => json_encode([
            'Soft, cool breasts',
            'Flattened areola',
            'Tender, firm breasts',
            'Absence of milk ejection',
        ]),
        'answer'      => 'Tender, firm breasts',
        'explanation' => 'Engorgement causes firmness, tenderness, and warmth due to increased blood flow and milk volume.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //2
    [
        'subject_id'  => 29,
        'part'        => 2,
        'question'    => "What is the optimal room temperature for storing expressed breast milk for up to 6 hours?",
        'choices'     => json_encode([
            '10°C (50°F)',
            '15-20°C (59-68°F)',
            '25-30°C (77-86°F)',
            '35-40°C (95-104°F)',
        ]),
        'answer'      => '15-20°C (59-68°F)',
        'explanation' => 'Freshly expressed milk is safe at room temperature (15–20°C) for up to 6–8 hours.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //3
    [
        'subject_id'  => 29,
        'part'        => 2,
        'question'    => "Which method helps relieve nipple soreness in breastfeeding mothers?",
        'choices'     => json_encode([
            'Applying alcohol swabs after feeding',
            'Allowing air-drying of nipples',
            'Using soap during breast cleaning',
            'Tightening bra straps',
        ]),
        'answer'      => 'Allowing air-drying of nipples',
        'explanation' => 'Air-drying nipples and expressing a few drops of breast milk to coat them can soothe soreness.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //4
    [
        'subject_id'  => 29,
        'part'        => 2,
        'question'    => "What is a recommended intervention for a mother with low milk supply?",
        'choices'     => json_encode([
            'Decrease feeding frequency',
            'Supplement with water only',
            'Increase skin-to-skin contact',
            'Avoid pumping between feeds',
        ]),
        'answer'      => 'Increase skin-to-skin contact',
        'explanation' => 'Skin-to-skin contact stimulates prolactin release and can enhance milk production.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //5
    [
        'subject_id'  => 29,
        'part'        => 2,
        'question'    => "Which feeding cue indicates an infant is hungry?",
        'choices'     => json_encode([
            'Turning head away',
            'Sucking on fists',
            'Closing mouth tightly',
            'Relaxed body posture',
        ]),
        'answer'      => 'Sucking on fists',
        'explanation' => 'Early hunger cues include rooting, lip smacking, and bringing hands to mouth.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //6
    [
        'subject_id'  => 29,
        'part'        => 2,
        'question'    => "What is the principal advantage of paced bottle feeding?",
        'choices'     => json_encode([
            'Faster feeding time',
            'Reduced risk of overfeeding',
            'Increased formula wastage',
            'Prevents breastfeeding entirely',
        ]),
        'answer'      => 'Reduced risk of overfeeding',
        'explanation' => 'Paced feeding mimics breastfeeding rates and allows infant control, reducing overfeeding and gastrointestinal upset.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //7
    [
        'subject_id'  => 29,
        'part'        => 2,
        'question'    => "Which condition might tongue-tie (ankyloglossia) cause in infants?",
        'choices'     => json_encode([
            'Enhanced milk transfer',
            'Improved weight gain',
            'Poor latch and insufficient intake',
            'Early weaning readiness',
        ]),
        'answer'      => 'Poor latch and insufficient intake',
        'explanation' => 'Restricted tongue movement impairs latch, leading to inadequate milk removal and weight gain.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //8
    [
        'subject_id'  => 29,
        'part'        => 2,
        'question'    => "Which sign suggests a potential cow's milk protein allergy in infants?",
        'choices'     => json_encode([
            'Soft, formed stools',
            'Colicky crying and rash',
            'Steady weight gain',
            'Quiet, content feeding',
        ]),
        'answer'      => 'Colicky crying and rash',
        'explanation' => 'Allergy may present with irritability, eczema, and gastrointestinal symptoms.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //9
    [
        'subject_id'  => 29,
        'part'        => 2,
        'question'    => "What is the recommended calorie requirement for term infants (kcal/kg/day)?",
        'choices'     => json_encode([
            '50-60',
            '80-100',
            '100-120',
            '120-140',
        ]),
        'answer'      => '100-120',
        'explanation' => 'Term infants typically require around 100–120 kcal/kg per day for growth and development.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //10
    [
        'subject_id'  => 29,
        'part'        => 2,
        'question'    => "Which action should follow thawing frozen breast milk?",
        'choices'     => json_encode([
            'Microwave heating',
            'Use within 24 hours refrigerated',
            'Refreeze immediately',
            'Store at room temperature for 12 hours',
        ]),
        'answer'      => 'Use within 24 hours refrigerated',
        'explanation' => 'Thawed milk should be stored in the fridge and used within 24 hours; refreezing is not advised.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //11
    [
        'subject_id'  => 29,
        'part'        => 2,
        'question'    => "Which technique is appropriate for cup feeding a newborn?",
        'choices'     => json_encode([
            'Tilting head back flat',
            'Pouring quickly into mouth',
            'Gentle sip at lip edge',
            'Forceful insertion of cup tip',
        ]),
        'answer'      => 'Gentle sip at lip edge',
        'explanation' => 'Offering small amounts at the lip edge lets the infant lap and control intake, reducing aspiration risk.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //12
    [
        'subject_id'  => 29,
        'part'        => 2,
        'question'    => "What is an appropriate feeding interval for preterm infants?",
        'choices'     => json_encode([
            'Every 2-3 hours',
            'Every 4-6 hours',
            'Only on demand',
            'Once at night',
        ]),
        'answer'      => 'Every 2-3 hours',
        'explanation' => 'Preterms often feed every 2–3 hours due to small stomach capacity and high metabolic needs.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //13
    [
        'subject_id'  => 29,
        'part'        => 2,
        'question'    => "Which is a sign of overfeeding in bottle-fed infants?",
        'choices'     => json_encode([
            'Gaining weight steadily',
            'Frequent regurgitation and fussiness',
            'Content quiet after feeds',
            'Adequate diaper output',
        ]),
        'answer'      => 'Frequent regurgitation and fussiness',
        'explanation' => 'Overfeeding can cause gastrointestinal distress, spit-up, and irritability.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //14
    [
        'subject_id'  => 29,
        'part'        => 2,
        'question'    => "Which supplement may be needed for exclusively breastfed infants beyond 4 months?",
        'choices'     => json_encode([
            'Vitamin K',
            'Iron',
            'Vitamin C',
            'Calcium',
        ]),
        'answer'      => 'Iron',
        'explanation' => 'Iron stores deplete by 4–6 months; supplementation or iron-rich foods become necessary.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //15
    [
        'subject_id'  => 29,
        'part'        => 2,
        'question'    => "What is a key advantage of kangaroo mother care?",
        'choices'     => json_encode([
            'Reduces breastfeeding frequency',
            'Improves thermoregulation and feeding success',
            'Decreases maternal-infant bonding',
            'Increases risk of aspiration',
        ]),
        'answer'      => 'Improves thermoregulation and feeding success',
        'explanation' => 'Skin-to-skin contact stabilizes temperature and supports breastfeeding in preterms.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //16
    [
        'subject_id'  => 29,
        'part'        => 2,
        'question'    => "Which earthenware or plastic container is recommended for storing expressed milk?",
        'choices'     => json_encode([
            'Unlidded bowl',
            'Sterile, food-grade container with lid',
            'Glass jar without lid',
            'Open plastic bag',
        ]),
        'answer'      => 'Sterile, food-grade container with lid',
        'explanation' => 'Clean, sealed containers minimize contamination and maintain milk quality.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //17
    [
        'subject_id'  => 29,
        'part'        => 2,
        'question'    => "Which practice helps maintain milk supply when returning to work?",
        'choices'     => json_encode([
            'Skip morning feeds',
            'Use a breast pump regularly during shifts',
            'Reduce fluid intake',
            'Avoid nursing on weekends',
        ]),
        'answer'      => 'Use a breast pump regularly during shifts',
        'explanation' => 'Regular pumping mimics feeding and preserves supply in the mother.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //18
    [
        'subject_id'  => 29,
        'part'        => 2,
        'question'    => "Which measurement confirms adequate hydration in infants?",
        'choices'     => json_encode([
            'Weight loss of 10% in first week',
            'Urine specific gravity <1.020',
            'No tear production',
            'Elevated heart rate',
        ]),
        'answer'      => 'Urine specific gravity <1.020',
        'explanation' => 'Lower specific gravity indicates dilute urine and good hydration.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //19
    [
        'subject_id'  => 29,
        'part'        => 2,
        'question'    => "When introducing allergenic solids, which practice is advised?",
        'choices'     => json_encode([
            'Give multiple new foods simultaneously',
            'Offer one new food at a time for 3-5 days',
            'Wait until after 12 months',
            'Avoid peanuts completely',
        ]),
        'answer'      => 'Offer one new food at a time for 3-5 days',
        'explanation' => 'Sequential introduction helps identify and manage allergic reactions.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //20
    [
        'subject_id'  => 29,
        'part'        => 2,
        'question'    => "Which caregiver action supports oral development?",
        'choices'     => json_encode([
            'Prolonged bottle use',
            'Encouraging chewing soft foods',
            'Avoiding finger foods until 2 yrs',
            'Using thin straws only',
        ]),
        'answer'      => 'Encouraging chewing soft foods',
        'explanation' => 'Introduction of soft solids promotes chewing and oral motor skills.',
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
            $this->command->warn("Part 2 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 2. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 2.");
    }
}
