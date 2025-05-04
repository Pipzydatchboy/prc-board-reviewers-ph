<?php

namespace Database\Seeders\LET\Majorship\TLE;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class TLEPart6Seeder extends Seeder
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

       // Part 6 – Foods & Nutrition – Question 1
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 6,
           'question'     => 'Which macronutrient provides the highest energy yield per gram?',
           'choices'      => json_encode([
               'Carbohydrate (4 kcal/g)',
               'Protein (4 kcal/g)',
               'Fat (9 kcal/g)',
               'Alcohol (7 kcal/g)',
           ]),
           'answer'       => 'Fat (9 kcal/g)',
           'explanation'  => 'Fat yields 9 kilocalories per gram, more than carbohydrates or protein.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 6 – Foods & Nutrition – Question 2
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 6,
           'question'     => 'Which vitamin deficiency causes scurvy?',
           'choices'      => json_encode([
               'Vitamin A',
               'Vitamin B12',
               'Vitamin C',
               'Vitamin D',
           ]),
           'answer'       => 'Vitamin C',
           'explanation'  => 'Lack of vitamin C leads to scurvy, characterized by gum bleeding and poor wound healing.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 6 – Foods & Nutrition – Question 3
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 6,
           'question'     => 'Which food group is the primary source of complete proteins?',
           'choices'      => json_encode([
               'Fruits',
               'Grains',
               'Proteins (meats, eggs, dairy)',
               'Vegetables',
           ]),
           'answer'       => 'Proteins (meats, eggs, dairy)',
           'explanation'  => 'Animal-based protein foods provide all essential amino acids, making them complete proteins.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 6 – Foods & Nutrition – Question 4
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 6,
           'question'     => 'Which Philippine dietary model illustrates proportionate servings of food groups?',
           'choices'      => json_encode([
               'MyPlate',
               'Food Pyramid',
               'Pinggang Pinoy',
               'Mediterranean Plate',
           ]),
           'answer'       => 'Pinggang Pinoy',
           'explanation'  => 'Pinggang Pinoy, developed by FNRI-DOST, shows recommended portions for Filipinos.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 6 – Foods & Nutrition – Question 5
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 6,
           'question'     => 'What temperature range is considered the “danger zone” for bacterial growth in foods (°C)?',
           'choices'      => json_encode([
               '0–5',
               '5–60',
               '60–100',
               '100–120',
           ]),
           'answer'       => '5–60',
           'explanation'  => 'Bacteria multiply rapidly between 5 °C and 60 °C, so foods should not remain in this range long.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 6 – Foods & Nutrition – Question 6
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 6,
           'question'     => 'What is the safe minimum internal temperature (°C) for cooking poultry?',
           'choices'      => json_encode([
               '60 °C',
               '74 °C',
               '100 °C',
               '85 °C',
           ]),
           'answer'       => '74 °C',
           'explanation'  => 'Cooking poultry to at least 74 °C ensures pathogens are destroyed.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 6 – Foods & Nutrition – Question 7
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 6,
           'question'     => 'Which method is the safest way to thaw frozen foods?',
           'choices'      => json_encode([
               'On the countertop at room temperature',
               'In the refrigerator',
               'Under hot running water',
               'In the microwave without defrost setting',
           ]),
           'answer'       => 'In the refrigerator',
           'explanation'  => 'Refrigerator thawing keeps foods out of the danger zone and slows bacterial growth.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 6 – Foods & Nutrition – Question 8
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 6,
           'question'     => 'Which preservation method uses heat to destroy enzymes and microorganisms before sealing in airtight containers?',
           'choices'      => json_encode([
               'Refrigeration',
               'Canning',
               'Freezing',
               'Drying',
           ]),
           'answer'       => 'Canning',
           'explanation'  => 'Canning applies high heat to create a sterile, sealed environment for long-term storage.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 6 – Foods & Nutrition – Question 9
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 6,
           'question'     => 'Fermentation preserves foods by:',
           'choices'      => json_encode([
               'Lowering pH through lactic acid production',
               'Increasing moisture content',
               'Adding salt only',
               'Dehydrating tissues',
           ]),
           'answer'       => 'Lowering pH through lactic acid production',
           'explanation'  => 'Lactic acid bacteria produce acid that inhibits spoilage organisms.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 6 – Foods & Nutrition – Question 10
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 6,
           'question'     => 'Which mineral is essential for oxygen transport in blood?',
           'choices'      => json_encode([
               'Calcium',
               'Iron',
               'Potassium',
               'Magnesium',
           ]),
           'answer'       => 'Iron',
           'explanation'  => 'Iron is a key component of hemoglobin, which carries oxygen in red blood cells.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 6 – Foods & Nutrition – Question 11
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 6,
           'question'     => 'Which kitchen tool measures the internal temperature of foods?',
           'choices'      => json_encode([
               'Meat thermometer',
               'Kitchen scale',
               'Timing device',
               'Measuring cup',
           ]),
           'answer'       => 'Meat thermometer',
           'explanation'  => 'Thermometers verify safe cooking temperatures to prevent foodborne illness.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 6 – Foods & Nutrition – Question 12
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 6,
           'question'     => 'Which cooking method uses indirect dry heat in an enclosed space?',
           'choices'      => json_encode([
               'Boiling',
               'Frying',
               'Baking',
               'Steaming',
           ]),
           'answer'       => 'Baking',
           'explanation'  => 'Baking surrounds food with hot air in an oven, cooking by convection.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 6 – Foods & Nutrition – Question 13
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 6,
           'question'     => 'Which substance commonly thickens sauces and gravies?',
           'choices'      => json_encode([
               'Cornstarch',
               'Salt',
               'Sugar',
               'Vinegar',
           ]),
           'answer'       => 'Cornstarch',
           'explanation'  => 'Cornstarch gelatinizes when heated, providing body to liquids.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 6 – Foods & Nutrition – Question 14
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 6,
           'question'     => 'Which leavening agent releases carbon dioxide when combined with acid in baking?',
           'choices'      => json_encode([
               'Baking powder',
               'Yeast',
               'Salt',
               'Water',
           ]),
           'answer'       => 'Baking powder',
           'explanation'  => 'Baking powder contains acid and base that react to produce CO₂ and leaven dough.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 6 – Foods & Nutrition – Question 15
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 6,
           'question'     => 'Which cooking technique involves submerging food in hot fat?',
           'choices'      => json_encode([
               'Deep frying',
               'Boiling',
               'Braising',
               'Steaming',
           ]),
           'answer'       => 'Deep frying',
           'explanation'  => 'Deep frying cooks food quickly at high temperatures in oil.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 6 – Foods & Nutrition – Question 16
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 6,
           'question'     => 'Which measurement is equivalent to 1 US cup in milliliters (approx)?',
           'choices'      => json_encode([
               '240 ml',
               '300 ml',
               '200 ml',
               '100 ml',
           ]),
           'answer'       => '240 ml',
           'explanation'  => '1 US cup is approximately 240 milliliters.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 6 – Foods & Nutrition – Question 17
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 6,
           'question'     => 'What is a key consideration when planning a menu for diabetic clients?',
           'choices'      => json_encode([
               'Low glycemic index foods',
               'High sugar content',
               'High saturated fats',
               'Excessive salt',
           ]),
           'answer'       => 'Low glycemic index foods',
           'explanation'  => 'Low GI foods help stabilize blood glucose levels in diabetic clients.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 6 – Foods & Nutrition – Question 18
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 6,
           'question'     => 'Which practice prevents cross-contamination in the kitchen?',
           'choices'      => json_encode([
               'Use separate cutting boards for raw meat and vegetables',
               'Wash knives only at end of day',
               'Store cooked and raw foods together',
               'Use same utensils for all foods',
           ]),
           'answer'       => 'Use separate cutting boards for raw meat and vegetables',
           'explanation'  => 'Color-coding and separation prevent transfer of pathogens between foods.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 6 – Foods & Nutrition – Question 19
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 6,
           'question'     => 'Which label information is required by law on packaged foods?',
           'choices'      => json_encode([
               'Nutritional facts and expiry date',
               'Company profit margin',
               'Cooking suggestions only',
               'Import tariff history',
           ]),
           'answer'       => 'Nutritional facts and expiry date',
           'explanation'  => 'Labels must display nutrition information and shelf-life to inform consumers.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 6 – Foods & Nutrition – Question 20
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 6,
           'question'     => 'What does HACCP stand for in food safety management?',
           'choices'      => json_encode([
               'Hazard Analysis & Critical Control Points',
               'Health and Cleanliness Control Program',
               'Heat Application & Cooling Control Process',
               'Home And Commercial Cooking Practices',
           ]),
           'answer'       => 'Hazard Analysis & Critical Control Points',
           'explanation'  => 'HACCP is a systematic preventive approach to food safety from biological, chemical, and physical hazards.',
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
            $this->command->warn("Part 6 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 6. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 6.");
    }
}
