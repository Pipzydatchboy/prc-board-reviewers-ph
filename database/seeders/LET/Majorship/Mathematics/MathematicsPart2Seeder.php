<?php

namespace Database\Seeders\LET\Majorship\Mathematics;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class MathematicsPart2Seeder extends Seeder
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

       // 21
       $batch[] = [
           'subject_id'  => 12,
           'part'        => 2,
           'question'    => "Solve for x: 3x - 7 = 11.",
           'choices'     => json_encode([
               'x = 6',
               'x = 2',
               'x = -2',
               'x = 7',
           ]),
           'answer'      => 'x = 6',
           'explanation' => 'Add 7 to both sides: 3x = 18, then divide by 3: x = 6.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 22
       $batch[] = [
           'subject_id'  => 12,
           'part'        => 2,
           'question'    => "Factor: x^2 - 5x + 6.",
           'choices'     => json_encode([
               '(x - 2)(x - 3)',
               '(x + 2)(x + 3)',
               '(x - 1)(x - 6)',
               '(x + 1)(x - 6)',
           ]),
           'answer'      => '(x - 2)(x - 3)',
           'explanation' => 'Find two numbers that multiply to +6 and add to -5: -2 and -3.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 23
       $batch[] = [
           'subject_id'  => 12,
           'part'        => 2,
           'question'    => "Simplify: (2x^3)(3x^2).",
           'choices'     => json_encode([
               '6x^5',
               '5x^6',
               '6x^4',
               '6x^1',
           ]),
           'answer'      => '6x^5',
           'explanation' => 'Multiply coefficients (2·3=6) and add exponents (3+2=5).',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 24
       $batch[] = [
           'subject_id'  => 12,
           'part'        => 2,
           'question'    => "Solve: x^2 - 9 = 0.",
           'choices'     => json_encode([
               'x = ±3',
               'x = 3 only',
               'x = -3 only',
               'No real solution',
           ]),
           'answer'      => 'x = ±3',
           'explanation' => 'Add 9: x^2 = 9 → x = ±3.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 25
       $batch[] = [
           'subject_id'  => 12,
           'part'        => 2,
           'question'    => "Perform: (x + 2) + (3x - 5).",
           'choices'     => json_encode([
               '4x - 3',
               '2x - 3',
               'x + 7',
               '4x + 7',
           ]),
           'answer'      => '4x - 3',
           'explanation' => 'Combine like terms: x+3x=4x; 2+(-5)=-3.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 26
       $batch[] = [
           'subject_id'  => 12,
           'part'        => 2,
           'question'    => "Solve for x: 2x^2 + 3x - 2 = 0.",
           'choices'     => json_encode([
               'x = 1/2 or x = -2',
               'x = 1 or x = -1',
               'x = 2 or x = -1/2',
               'x = -1/2 only',
           ]),
           'answer'      => 'x = 1/2 or x = -2',
           'explanation' => 'Factor into (2x-1)(x+2)=0 → x=1/2 or x=-2.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 27
       $batch[] = [
           'subject_id'  => 12,
           'part'        => 2,
           'question'    => "Simplify: 4x^2y / 2xy^2.",
           'choices'     => json_encode([
               '2x/y',
               '2y/x',
               'x/2y',
               'y/2x',
           ]),
           'answer'      => '2x/y',
           'explanation' => 'Divide coefficients (4/2=2), x^2/x=x, y/y^2=1/y.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 28
       $batch[] = [
           'subject_id'  => 12,
           'part'        => 2,
           'question'    => "Which is the graph of y = x^2 shifted right by 3?",
           'choices'     => json_encode([
               'y = (x - 3)^2',
               'y = (x + 3)^2',
               'y = x^2 + 3',
               'y = x^2 - 3',
           ]),
           'answer'      => 'y = (x - 3)^2',
           'explanation' => 'A shift right by 3 replaces x with (x-3) inside the function.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 29
       $batch[] = [
           'subject_id'  => 12,
           'part'        => 2,
           'question'    => "Solve: |2x - 5| = 3.",
           'choices'     => json_encode([
               'x = 4 or x = 1',
               'x = 1 only',
               'x = 4 only',
               'No solution',
           ]),
           'answer'      => 'x = 4 or x = 1',
           'explanation' => '2x-5=3 → x=4; 2x-5=-3 → x=1.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 30
       $batch[] = [
           'subject_id'  => 12,
           'part'        => 2,
           'question'    => "Solve inequality: 2x + 1 < 7.",
           'choices'     => json_encode([
               'x < 3',
               'x < 4',
               'x > 3',
               'x > 4',
           ]),
           'answer'      => 'x < 3',
           'explanation' => 'Subtract 1: 2x < 6 → x < 3.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 31
       $batch[] = [
           'subject_id'  => 12,
           'part'        => 2,
           'question'    => "Factor: 4x^2 - 9.",
           'choices'     => json_encode([
               '(2x - 3)(2x + 3)',
               '(4x - 3)(x + 3)',
               '(2x - 9)(2x + 1)',
               'Prime',
           ]),
           'answer'      => '(2x - 3)(2x + 3)',
           'explanation' => 'Difference of squares: a^2 - b^2 = (a-b)(a+b).',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 32
       $batch[] = [
           'subject_id'  => 12,
           'part'        => 2,
           'question'    => "Divide: (x^3 - 8) ÷ (x - 2).",
           'choices'     => json_encode([
               'x^2 + 2x + 4',
               'x^2 - 2x + 4',
               'x^2 + 2x - 4',
               'x^2 - 2x - 4',
           ]),
           'answer'      => 'x^2 + 2x + 4',
           'explanation' => 'Use synthetic division or recognize sum of cubes: (x-2)(x^2+2x+4).',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 33
       $batch[] = [
           'subject_id'  => 12,
           'part'        => 2,
           'question'    => "Solve for x: x^2 + 4x + 4 = 0.",
           'choices'     => json_encode([
               'x = -2',
               'x = 2',
               'x = -4',
               'No real solution',
           ]),
           'answer'      => 'x = -2',
           'explanation' => 'Perfect square: (x+2)^2=0 → x=-2.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 34
       $batch[] = [
           'subject_id'  => 12,
           'part'        => 2,
           'question'    => "Expand: (x + 1)^2.",
           'choices'     => json_encode([
               'x^2 + 2x + 1',
               'x^2 + 1',
               'x^2 + x + 1',
               'x^2 - x + 1',
           ]),
           'answer'      => 'x^2 + 2x + 1',
           'explanation' => 'Use (a+b)^2 = a^2 + 2ab + b^2.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 35
       $batch[] = [
           'subject_id'  => 12,
           'part'        => 2,
           'question'    => "Solve inequality: x^2 - 4 > 0.",
           'choices'     => json_encode([
               'x < -2 or x > 2',
               '-2 < x < 2',
               'x > 2 only',
               'x < -2 only',
           ]),
           'answer'      => 'x < -2 or x > 2',
           'explanation' => 'Solve x^2>4 → x>2 or x<-2.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 36
       $batch[] = [
           'subject_id'  => 12,
           'part'        => 2,
           'question'    => "Factor completely: x^3 - x.",
           'choices'     => json_encode([
               'x(x - 1)(x + 1)',
               '(x - 1)(x^2 + x + 1)',
               'x(x + 1)^2',
               'Prime',
           ]),
           'answer'      => 'x(x - 1)(x + 1)',
           'explanation' => 'Factor out x, then difference of squares on (x^2 - 1).',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 37
       $batch[] = [
           'subject_id'  => 12,
           'part'        => 2,
           'question'    => "Find the zeros of 2x^2 - 8 = 0.",
           'choices'     => json_encode([
               'x = ±2',
               'x = ±√2',
               'x = ±4',
               'x = 2 only',
           ]),
           'answer'      => 'x = ±2',
           'explanation' => '2x^2=8 → x^2=4 → x=±2.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 38
       $batch[] = [
           'subject_id'  => 12,
           'part'        => 2,
           'question'    => "Simplify: (x^2 - 9)/(x + 3).",
           'choices'     => json_encode([
               'x - 3',
               'x + 3',
               'x^2 + 3x + 9',
               'x - 9',
           ]),
           'answer'      => 'x - 3',
           'explanation' => 'Factor numerator (x-3)(x+3) then cancel (x+3).',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 39
       $batch[] = [
           'subject_id'  => 12,
           'part'        => 2,
           'question'    => "Solve system: {2x + y = 5; x - y = 1}.",
           'choices'     => json_encode([
               '(2, 1)',
               '(1, 3)',
               '(3, -1)',
               '(4, -3)',
           ]),
           'answer'      => '(2, 1)',
           'explanation' => 'Add equations: 3x = 6 → x=2; substitute in x-y=1 → 2-y=1 → y=1.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 40
       $batch[] = [
           'subject_id'  => 12,
           'part'        => 2,
           'question'    => "If f(x) = 3x + 1, find f^{-1}(7).",
           'choices'     => json_encode([
               '2',
               '3',
               '6',
               'None',
           ]),
           'answer'      => '2',
           'explanation' => 'Solve 3x+1=7 → 3x=6 → x=2.',
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
