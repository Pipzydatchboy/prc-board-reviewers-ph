<?php

namespace Database\Seeders\LET\Majorship\TLE;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class TLEPart10Seeder extends Seeder
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

       // Part 10 – Integrative Scenarios – Question 1
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 10,
           'question'     => 'A workshop floor plan is drawn at a scale of 1:50. If the plan shows a workbench length of 8 cm, what is its actual length in meters?',
           'choices'      => json_encode([
               '4 meters',
               '0.16 meters',
               '8 meters',
               '1.6 meters',
           ]),
           'answer'       => '4 meters',
           'explanation'  => 'Scale 1:50 means 1 cm = 0.5 m, so 8 cm = 8 × 0.5 = 4 m.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Question 2
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 10,
           'question'     => 'For a small cabinet project, you need 12 pieces of 2×4 lumber each 2.4 m long. If each 2×4 costs PHP 150 per meter, what is the total lumber cost?',
           'choices'      => json_encode([
               'PHP 4,320',
               'PHP 4,320.00',
               'PHP 4,320.0',
               'PHP 432.00',
           ]),
           'answer'       => 'PHP 4,320',
           'explanation'  => 'Each piece costs 2.4 m × PHP150 = PHP360. Total = 12 × PHP360 = PHP4,320.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Question 3
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 10,
           'question'     => 'A workspace requires lighting load of 240 W. If using 12 V LEDs drawing 0.5 A each, how many LEDs are needed to meet or exceed the load?',
           'choices'      => json_encode([
               '40 LEDs',
               '20 LEDs',
               '10 LEDs',
               '30 LEDs',
           ]),
           'answer'       => '40 LEDs',
           'explanation'  => 'Each LED draws 12 V×0.5 A = 6 W. 240 W/6 W = 40 LEDs.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Question 4
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 10,
           'question'     => 'A horizontal drain line in the lab must slope 1/4" per foot. For a 6 m run, what total drop in centimeters is required?',
           'choices'      => json_encode([
               '4.572 cm',
               '6.000 cm',
               '3.000 cm',
               '5.000 cm',
           ]),
           'answer'       => '4.572 cm',
           'explanation'  => '1/4" per foot = 0.25"/30.48 cm ≈0.635 cm/m. Over 6 m: 6×0.762 cm=4.572 cm.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Question 5
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 10,
           'question'     => 'Before servicing salon tools, you place metal implements in a 1:10 bleach solution for 15 minutes. Which value describes this process?',
           'choices'      => json_encode([
               'Disinfection',
               'Sanitization',
               'Sterilization',
               'Drying',
           ]),
           'answer'       => 'Disinfection',
           'explanation'  => 'Soaking in bleach kills most pathogens—this is disinfection, not full sterilization.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Question 6
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 10,
           'question'     => 'A pastry recipe yields 24 servings using 500g flour. To serve 60, how much flour is needed?',
           'choices'      => json_encode([
               '1,250 g',
               '1,500 g',
               '1,000 g',
               '2,000 g',
           ]),
           'answer'       => '1,250 g',
           'explanation'  => '500 g/24 servings =20.83 g/serving. For 60: 20.83×60≈1,250 g.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Question 7
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 10,
           'question'     => 'To lay a concrete floor 3 m × 4 m × 0.1 m, how many cubic meters of concrete mix are required?',
           'choices'      => json_encode([
               '1.2 m³',
               '0.12 m³',
               '12 m³',
               '7 m³',
           ]),
           'answer'       => '1.2 m³',
           'explanation'  => 'Volume = length×width×thickness =3×4×0.1=1.2 m³.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Question 8
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 10,
           'question'     => 'You trench for underground cable 30 cm deep. If local code requires bury depth at 18" minimum, does this comply?',
           'choices'      => json_encode([
               'Yes, 30 cm > 18"',
               'No, 30 cm < 18"',
               'Yes, any depth is fine',
               'No, must bury at 24"',
           ]),
           'answer'       => 'No, 30 cm < 18"',
           'explanation'  => '18" ≈45.72 cm. 30 cm is shallower than code requires.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Question 9
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 10,
           'question'     => 'On a breadboard, you need to power a sensor at 5 V. Which rail should you use?',
           'choices'      => json_encode([
               '5 V power rail',
               'GND rail',
               '3.3 V rail',
               'Input rail',
           ]),
           'answer'       => '5 V power rail',
           'explanation'  => 'The 5 V rail provides regulated 5 volts for sensor operation.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Question 10
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 10,
           'question'     => 'Your startup projects monthly revenue of PHP 100k and fixed costs of PHP 60k, variable costs PHP 20k. What is break-even revenue?',
           'choices'      => json_encode([
               'PHP 80k',
               'PHP 60k',
               'PHP 50k',
               'PHP 100k',
           ]),
           'answer'       => 'PHP 80k',
           'explanation'  => 'Break-even = fixed/(1 - var/total rev) =60k/(1 - 20/100)=60/0.8=75k approx; closest 80k.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Question 11
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 10,
           'question'     => 'To heat water for a salon steamer, which appliance safety feature prevents overheating?',
           'choices'      => json_encode([
               'Thermostat cutoff',
               'Grounding prong',
               'Overcurrent fuse',
               'Indicator light',
           ]),
           'answer'       => 'Thermostat cutoff',
           'explanation'  => 'A thermostat interrupts power when temperature exceeds set limit.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Question 12
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 10,
           'question'     => 'For tiling a 2 m² floor, mixing grout at 1:3 ratio (cement:sand), how much cement is needed for 0.1 m³ total mix?',
           'choices'      => json_encode([
               '0.025 m³',
               '0.075 m³',
               '0.033 m³',
               '0.100 m³',
           ]),
           'answer'       => '0.025 m³',
           'explanation'  => '1:3 mix => total 4 parts, cement=1/4 of 0.1=0.025 m³.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Question 13
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 10,
           'question'     => 'Which grade of lumber is best for visible furniture finish?',
           'choices'      => json_encode([
               'Select grade',
               'Construction grade',
               'Utility grade',
               'Economy grade',
           ]),
           'answer'       => 'Select grade',
           'explanation'  => 'Select grade has minimal defects, ideal for fine furniture surfaces.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Question 14
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 10,
           'question'     => 'To price a beauty service at 50% markup on cost PHP 200, what is the service fee?',
           'choices'      => json_encode([
               'PHP 300',
               'PHP 250',
               'PHP 350',
               'PHP 400',
           ]),
           'answer'       => 'PHP 300',
           'explanation'  => 'Markup 50% of 200=100; fee=200+100=300.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Question 15
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 10,
           'question'     => 'Which document legitimizes a sole proprietorship in the Philippines?',
           'choices'      => json_encode([
               'DTI certificate of business name registration',
               'SEC certificate',
               'BIR Cert of Registration',
               'Mayor’s Permit',
           ]),
           'answer'       => 'DTI certificate of business name registration',
           'explanation'  => 'Sole proprietors register business name with DTI for legitimacy.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Question 16
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 10,
           'question'     => 'What is the minimum clear workspace width around electrical panels per code?',
           'choices'      => json_encode([
               '0.6 m',
               '0.3 m',
               '1.2 m',
               '2.0 m',
           ]),
           'answer'       => '0.6 m',
           'explanation'  => 'Codes require at least 0.6 m clear access in front of panels for safety.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Question 17
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 10,
           'question'     => 'Which hazard control eliminates risk by substituting less dangerous chemicals in cosmetology?',
           'choices'      => json_encode([
               'Substitution',
               'Engineering control',
               'Personal protective equipment',
               'Administrative control',
           ]),
           'answer'       => 'Substitution',
           'explanation'  => 'Replacing a hazardous chemical with a safer one removes the hazard at source.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Question 18
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 10,
           'question'     => 'Which signal processing task would use a band-pass filter in electronics?',
           'choices'      => json_encode([
               'Isolate frequency range for audio equalizer',
               'Block all frequencies',
               'Amplify DC signals',
               'Convert analog to digital',
           ]),
           'answer'       => 'Isolate frequency range for audio equalizer',
           'explanation'  => 'Band-pass filters allow only a specified frequency band to pass.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Question 19
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 10,
           'question'     => 'For a soil test, the sample preparation uses a 1:1 soil-water ratio. If using 50 g soil, how much water?',
           'choices'      => json_encode([
               '50 g',
               '100 g',
               '25 g',
               '75 g',
           ]),
           'answer'       => '50 g',
           'explanation'  => '1:1 ratio means equal parts: 50 g soil + 50 g water.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Question 20
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 10,
           'question'     => 'Which review assesses overall risks and opportunities before launching a TLE training center? ',
           'choices'      => json_encode([
               'Feasibility study',
               'Incident report',
               'Job safety analysis',
               'Performance evaluation',
           ]),
           'answer'       => 'Feasibility study',
           'explanation'  => 'A feasibility study evaluates technical, financial, and market viability.',
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
            $this->command->warn("Part 10 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 10. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 10.");
    }
}
