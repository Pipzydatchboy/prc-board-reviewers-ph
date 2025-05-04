<?php

namespace Database\Seeders\LET\Majorship\PhysicalEducation;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PhysicalEducationPart6Seeder extends Seeder
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

       // Part 6: Health, Fitness & Wellness (nutrition, body composition, cardio fitness)

       //1
       $batch[] = [
           'subject_id'  => 18,
           'part'        => 6,
           'question'    => 'Which macronutrient provides 4 kcal per gram and is the primary source of energy for high-intensity exercise?',
           'choices'     => json_encode([
               'Carbohydrate',
               'Protein',
               'Fat',
               'Alcohol',
           ]),
           'answer'      => 'Carbohydrate',
           'explanation' => 'Carbohydrates supply glucose, the main fuel for anaerobic and high-intensity activities.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //2
       $batch[] = [
           'subject_id'  => 18,
           'part'        => 6,
           'question'    => 'What body composition measure expresses the ratio of lean mass to fat mass?',
           'choices'     => json_encode([
               'Lean body mass percentage',
               'Body mass index',
               'Body surface area',
               'Waist-to-hip ratio',
           ]),
           'answer'      => 'Lean body mass percentage',
           'explanation' => 'Lean body mass percentage indicates proportion of muscle, bone, and organs relative to fat.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //3
       $batch[] = [
           'subject_id'  => 18,
           'part'        => 6,
           'question'    => 'Which heart rate zone corresponds to moderate-intensity cardio exercise at 50–70% of maximum heart rate?',
           'choices'     => json_encode([
               'Aerobic zone',
               'Anaerobic zone',
               'Fat-burning zone',
               'Recovery zone',
           ]),
           'answer'      => 'Aerobic zone',
           'explanation' => 'The aerobic zone (50–70% MHR) improves cardiovascular endurance and fat metabolism.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //4
       $batch[] = [
           'subject_id'  => 18,
           'part'        => 6,
           'question'    => 'What is the recommended daily protein intake for a sedentary adult (grams per kilogram of body weight)?',
           'choices'     => json_encode([
               '0.8 g/kg',
               '1.2 g/kg',
               '1.6 g/kg',
               '2.0 g/kg',
           ]),
           'answer'      => '0.8 g/kg',
           'explanation' => 'The RDA for protein in sedentary adults is 0.8 grams per kilogram of body weight.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //5
       $batch[] = [
           'subject_id'  => 18,
           'part'        => 6,
           'question'    => 'Which test estimates aerobic capacity by measuring oxygen consumption during incremental exercise?',
           'choices'     => json_encode([
               'VO2 max test',
               'Flexibility test',
               'Body fat caliper test',
               'Balance test',
           ]),
           'answer'      => 'VO2 max test',
           'explanation' => 'VO2 max testing assesses the maximal amount of oxygen the body can utilize during intense exercise.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //6
       $batch[] = [
           'subject_id'  => 18,
           'part'        => 6,
           'question'    => 'Which vitamin is fat-soluble and important for calcium absorption and bone health?',
           'choices'     => json_encode([
               'Vitamin D',
               'Vitamin C',
               'Vitamin B12',
               'Vitamin K',
           ]),
           'answer'      => 'Vitamin D',
           'explanation' => 'Vitamin D enhances intestinal calcium absorption and supports bone mineralization.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //7
       $batch[] = [
           'subject_id'  => 18,
           'part'        => 6,
           'question'    => 'What term describes the process of reducing caloric intake below energy expenditure for weight loss?',
           'choices'     => json_encode([
               'Caloric deficit',
               'Caloric surplus',
               'Maintenance calories',
               'Thermic effect of food',
           ]),
           'answer'      => 'Caloric deficit',
           'explanation' => 'A caloric deficit occurs when energy intake is less than energy expended.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //8
       $batch[] = [
           'subject_id'  => 18,
           'part'        => 6,
           'question'    => 'Which body composition assessment uses bioelectrical impedance to estimate fat and lean mass?',
           'choices'     => json_encode([
               'BIA',
               'Skinfold caliper',
               'Underwater weighing',
               'DXA scan',
           ]),
           'answer'      => 'BIA',
           'explanation' => 'Bioelectrical impedance analysis measures resistance to an electrical current to estimate body compartments.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //9
       $batch[] = [
           'subject_id'  => 18,
           'part'        => 6,
           'question'    => 'Which component of fitness is evaluated by the sit-and-reach test?',
           'choices'     => json_encode([
               'Flexibility',
               'Strength',
               'Power',
               'Endurance',
           ]),
           'answer'      => 'Flexibility',
           'explanation' => 'The sit-and-reach test measures the flexibility of the lower back and hamstrings.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //10
       $batch[] = [
           'subject_id'  => 18,
           'part'        => 6,
           'question'    => 'What is the target heart rate range for vigorous-intensity exercise (70–85% MHR)?',
           'choices'     => json_encode([
               'Vigorous zone',
               'Light zone',
               'Moderate zone',
               'Anaerobic threshold',
           ]),
           'answer'      => 'Vigorous zone',
           'explanation' => 'The vigorous zone, at 70–85% MHR, pushes cardiovascular capacity and endurance.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //11
       $batch[] = [
           'subject_id'  => 18,
           'part'        => 6,
           'question'    => 'Which mineral is essential for oxygen transport in hemoglobin?',
           'choices'     => json_encode([
               'Iron',
               'Calcium',
               'Magnesium',
               'Potassium',
           ]),
           'answer'      => 'Iron',
           'explanation' => 'Iron is a key component of hemoglobin, carrying oxygen in red blood cells.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //12
       $batch[] = [
           'subject_id'  => 18,
           'part'        => 6,
           'question'    => 'What does BMI stand for and what does it assess?',
           'choices'     => json_encode([
               'Body Mass Index: weight relative to height',
               'Basal Metabolic Intake: calories burned at rest',
               'Bone Mass Indicator: bone density',
               'Body Measurement Indicator: circumferences',
           ]),
           'answer'      => 'Body Mass Index: weight relative to height',
           'explanation' => 'BMI is a screening tool to categorize underweight, normal, overweight, and obesity.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //13
       $batch[] = [
           'subject_id'  => 18,
           'part'        => 6,
           'question'    => 'Which dietary component has the highest energy density (kcal per gram)?',
           'choices'     => json_encode([
               'Fat',
               'Carbohydrate',
               'Protein',
               'Fiber',
           ]),
           'answer'      => 'Fat',
           'explanation' => 'Fat provides approximately 9 kcal per gram, the most of all macronutrients.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //14
       $batch[] = [
           'subject_id'  => 18,
           'part'        => 6,
           'question'    => 'What is the term for the minimum energy required to maintain basic physiological functions at rest?',
           'choices'     => json_encode([
               'Basal Metabolic Rate',
               'Resting Heart Rate',
               'VO2 max',
               'Thermic Effect of Food',
           ]),
           'answer'      => 'Basal Metabolic Rate',
           'explanation' => 'BMR is the energy expended for essential cellular functions during rest.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //15
       $batch[] = [
           'subject_id'  => 18,
           'part'        => 6,
           'question'    => 'Which cardiovascular test uses the step test protocol to estimate fitness?',
           'choices'     => json_encode([
               'Queen’s College Step Test',
               'Cooper 12-minute Run Test',
               'Beep Test',
               'Harvard Step Test',
           ]),
           'answer'      => 'Harvard Step Test',
           'explanation' => 'The Harvard Step Test measures recovery heart rates to assess aerobic fitness.',
           'created_at'  => $now,
           'updated_at'  => $now
       ];

       //16
       $batch[] = [
           'subject_id'  => 18,
           'part'        => 6,
           'question'    => 'Which nutrient deficiency causes goiter?',
           'choices'     => json_encode([
               'Iodine',
               'Vitamin C',
               'Iron',
               'Calcium',
           ]),
           'answer'      => 'Iodine',
           'explanation' => 'Iodine is required for thyroid hormone production; deficiency leads to goiter.',
           'created_at'  => $now,
           'updated_at'  => $now
       ];

       //17
       $batch[] = [
           'subject_id'  => 18,
           'part'        => 6,
           'question'    => 'What does the term VO2 reserve represent?',
           'choices'     => json_encode([
               'Difference between VO2 max and VO2 at rest',
               'Amount of oxygen in blood',
               'Total lung capacity',
               'Heart rate variability',
           ]),
           'answer'      => 'Difference between VO2 max and VO2 at rest',
           'explanation' => 'VO2 reserve is used to prescribe exercise intensity more precisely.',
           'created_at'  => $now,
           'updated_at'  => $now
       ];

       //18
       $batch[] = [
           'subject_id'  => 18,
           'part'        => 6,
           'question'    => 'Which lipid type is associated with increased risk of cardiovascular disease when elevated?',
           'choices'     => json_encode([
               'LDL cholesterol',
               'HDL cholesterol',
               'Triglycerides',
               'Omega-3 fatty acids',
           ]),
           'answer'      => 'LDL cholesterol',
           'explanation' => 'Low-density lipoprotein (LDL) deposits cholesterol in arteries, increasing atherosclerosis risk.',
           'created_at'  => $now,
           'updated_at'  => $now
       ];

       //19
       $batch[] = [
           'subject_id'  => 18,
           'part'        => 6,
           'question'    => 'What is the purpose of the sit-up test in fitness assessment?',
           'choices'     => json_encode([
               'Assess abdominal muscular endurance',
               'Measure cardiovascular endurance',
               'Evaluate flexibility',
               'Test agility',
           ]),
           'answer'      => 'Assess abdominal muscular endurance',
           'explanation' => 'Sit-up tests count repetitions in a set time to gauge core endurance.',
           'created_at'  => $now,
           'updated_at'  => $now
       ];

       //20
       $batch[] = [
           'subject_id'  => 18,
           'part'        => 6,
           'question'    => 'Which dietary guideline recommends consuming a variety of fruits, vegetables, grains, protein foods, and dairy?',
           'choices'     => json_encode([
               'MyPlate',
               'Keto Diet',
               'Paleo Diet',
               'Mediterranean Diet',
           ]),
           'answer'      => 'MyPlate',
           'explanation' => 'MyPlate visual promotes balanced meals across all food groups.',
           'created_at'  => $now,
           'updated_at'  => $now
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
