<?php

namespace Database\Seeders\LET\Majorship\Mathematics;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class MathematicsPart5Seeder extends Seeder
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

       // 81
       $batch[] = [
           'subject_id'  => 12,
           'part'        => 5,
           'question'    => "What is the value of sin(30°)?",
           'choices'     => json_encode([
               '1/2',
               '√2/2',
               '√3/2',
               '1',
           ]),
           'answer'      => '1/2',
           'explanation' => 'On the unit circle sin(30°)=1/2.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 82
       $batch[] = [
           'subject_id'  => 12,
           'part'        => 5,
           'question'    => "Convert 180° to radians.",
           'choices'     => json_encode([
               'π',
               '2π',
               'π/2',
               '2π/3',
           ]),
           'answer'      => 'π',
           'explanation' => '180° equals π radians.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 83
       $batch[] = [
           'subject_id'  => 12,
           'part'        => 5,
           'question'    => "What are the coordinates of a point at 45° on the unit circle?",
           'choices'     => json_encode([
               '(√2/2, √2/2)',
               '(1, 0)',
               '(0, 1)',
               '(√3/2, 1/2)',
           ]),
           'answer'      => '(√2/2, √2/2)',
           'explanation' => 'At 45°, both x and y equal √2/2 on the unit circle.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 84
       $batch[] = [
           'subject_id'  => 12,
           'part'        => 5,
           'question'    => "Solve sin x = 1/2 for x in [0°,360°).",
           'choices'     => json_encode([
               '30°, 150°',
               '45°, 135°',
               '60°, 300°',
               '30° only',
           ]),
           'answer'      => '30°, 150°',
           'explanation' => 'Sine equals 1/2 at 30° and its supplement 150°.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 85
       $batch[] = [
           'subject_id'  => 12,
           'part'        => 5,
           'question'    => "What is cos(-60°)?",
           'choices'     => json_encode([
               '1/2',
               '-1/2',
               '√3/2',
               '-√3/2',
           ]),
           'answer'      => '1/2',
           'explanation' => 'Cosine is even: cos(-θ)=cosθ, so cos(-60°)=1/2.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 86
       $batch[] = [
           'subject_id'  => 12,
           'part'        => 5,
           'question'    => "Evaluate tan(45°).",
           'choices'     => json_encode([
               '1',
               '0',
               '√3',
               '√2',
           ]),
           'answer'      => '1',
           'explanation' => 'tan(45°)=sin45°/cos45°=(√2/2)/(√2/2)=1.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 87
       $batch[] = [
           'subject_id'  => 12,
           'part'        => 5,
           'question'    => "Which identity is correct?",
           'choices'     => json_encode([
               'sin²θ + cos²θ = 1',
               'tan²θ + 1 = sin²θ',
               'sec²θ = 1 - tan²θ',
               'csc²θ - cot²θ = 0',
           ]),
           'answer'      => 'sin²θ + cos²θ = 1',
           'explanation' => 'Basic Pythagorean identity in trigonometry.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 88
       $batch[] = [
           'subject_id'  => 12,
           'part'        => 5,
           'question'    => "Express tanθ using sine and cosine.",
           'choices'     => json_encode([
               'sinθ / cosθ',
               'cosθ / sinθ',
               '1 / sinθ',
               '1 / cosθ',
           ]),
           'answer'      => 'sinθ / cosθ',
           'explanation' => 'tanθ is defined as sinθ divided by cosθ.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 89
       $batch[] = [
           'subject_id'  => 12,
           'part'        => 5,
           'question'    => "Solve 2 sin x = √2 for x in [0,2π].",
           'choices'     => json_encode([
               'π/4, 3π/4',
               'π/6, 5π/6',
               'π/3, 2π/3',
               'π/2 only',
           ]),
           'answer'      => 'π/4, 3π/4',
           'explanation' => 'sin x = √2/2 → x=π/4,3π/4 in [0,2π].',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 90
       $batch[] = [
           'subject_id'  => 12,
           'part'        => 5,
           'question'    => "What is the amplitude of y = 3 sin x?",
           'choices'     => json_encode([
               '3',
               '1',
               '0',
               'None',
           ]),
           'answer'      => '3',
           'explanation' => 'Amplitude equals the coefficient of sin, which is 3.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 91
       $batch[] = [
           'subject_id'  => 12,
           'part'        => 5,
           'question'    => "State the Law of Sines for triangle ABC.",
           'choices'     => json_encode([
               'a/sinA = b/sinB = c/sinC',
               'a^2 + b^2 = c^2',
               'sinA = a/h',
               'A + B + C = 180°',
           ]),
           'answer'      => 'a/sinA = b/sinB = c/sinC',
           'explanation' => 'Law of Sines relates sides and sines of opposite angles.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 92
       $batch[] = [
           'subject_id'  => 12,
           'part'        => 5,
           'question'    => "Express Law of Cosines for side a.",
           'choices'     => json_encode([
               'a² = b² + c² - 2bc cosA',
               'a² = b² + c² + 2bc cosA',
               'a = b + c - 2bc cosA',
               'a² = b² - c² + 2bc cosA',
           ]),
           'answer'      => 'a² = b² + c² - 2bc cosA',
           'explanation' => 'Law of Cosines generalizes Pythagorean theorem.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 93
       $batch[] = [
           'subject_id'  => 12,
           'part'        => 5,
           'question'    => "What is the reference angle for 150°?",
           'choices'     => json_encode([
               '30°',
               '45°',
               '60°',
               '75°',
           ]),
           'answer'      => '30°',
           'explanation' => 'Reference angle = 180° - 150° = 30°.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 94
       $batch[] = [
           'subject_id'  => 12,
           'part'        => 5,
           'question'    => "Use the identity sin(π/6) =?",
           'choices'     => json_encode([
               '1/2',
               '√3/2',
               '√2/2',
               '1',
           ]),
           'answer'      => '1/2',
           'explanation' => 'π/6 equals 30°, sin30°=1/2.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 95
       $batch[] = [
           'subject_id'  => 12,
           'part'        => 5,
           'question'    => "What is cos(3π/2)?",
           'choices'     => json_encode([
               '0',
               '1',
               '-1',
               'Undefined',
           ]),
           'answer'      => '0',
           'explanation' => '3π/2 equals 270°, cos270°=0.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 96
       $batch[] = [
           'subject_id'  => 12,
           'part'        => 5,
           'question'    => "Solve cos x = 0 for x in [0, 2π].",
           'choices'     => json_encode([
               'π/2, 3π/2',
               '0, π',
               'π/4, 3π/4',
               'π only',
           ]),
           'answer'      => 'π/2, 3π/2',
           'explanation' => 'Cosine zero at 90° and 270°, i.e., π/2 and 3π/2.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 97
       $batch[] = [
           'subject_id'  => 12,
           'part'        => 5,
           'question'    => "State the addition formula for sin(a + b).",
           'choices'     => json_encode([
               'sin a cos b + cos a sin b',
               'sin a cos b - cos a sin b',
               'cos a cos b - sin a sin b',
               'sin a sin b + cos a cos b',
           ]),
           'answer'      => 'sin a cos b + cos a sin b',
           'explanation' => 'Standard addition formula for sine.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 98
       $batch[] = [
           'subject_id'  => 12,
           'part'        => 5,
           'question'    => "Express cos(2θ) using cos²θ and sin²θ.",
           'choices'     => json_encode([
               'cos²θ - sin²θ',
               '2cos²θ - 1',
               '1 - 2sin²θ',
               'All of the above',
           ]),
           'answer'      => 'All of the above',
           'explanation' => 'Multiple equivalent forms of the double-angle identity.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 99
       $batch[] = [
           'subject_id'  => 12,
           'part'        => 5,
           'question'    => "Simplify tanθ · cosθ / sinθ.",
           'choices'     => json_encode([
               '1',
               'tan²θ',
               'cos²θ',
               'sin²θ',
           ]),
           'answer'      => '1',
           'explanation' => 'tanθ = sinθ/cosθ, so expression = (sinθ/cosθ)*(cosθ/sinθ)=1.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 100
       $batch[] = [
           'subject_id'  => 12,
           'part'        => 5,
           'question'    => "What is arcsin(1)?",
           'choices'     => json_encode([
               'π/2',
               'π/4',
               'π',
               '0',
           ]),
           'answer'      => 'π/2',
           'explanation' => 'arcsin(1) is the angle whose sine is 1, which is π/2.',
           'created_at'  => $now,
           'updated_at'  => $now,
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
