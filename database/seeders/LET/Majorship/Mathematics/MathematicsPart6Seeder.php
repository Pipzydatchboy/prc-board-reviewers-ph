<?php

namespace Database\Seeders\LET\Majorship\Mathematics;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class MathematicsPart6Seeder extends Seeder
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

       // 101
       $batch[] = [
           'subject_id'  => 12,
           'part'        => 6,
           'question'    => "Evaluate the limit: limₓ→2 (x² - 4)/(x - 2).",
           'choices'     => json_encode([
               '4',
               '2',
               '1',
               '0',
           ]),
           'answer'      => '4',
           'explanation' => 'Factor numerator: (x-2)(x+2)/(x-2) → x+2; at x=2 gives 4.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 102
       $batch[] = [
           'subject_id'  => 12,
           'part'        => 6,
           'question'    => "Find f'(x) if f(x) = 3x² - 5x + 2.",
           'choices'     => json_encode([
               '6x - 5',
               '3x - 5',
               '6x + 5',
               '9x² - 5',
           ]),
           'answer'      => '6x - 5',
           'explanation' => 'Derivative: d/dx[3x²]=6x, d/dx[-5x]=-5.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 103
       $batch[] = [
           'subject_id'  => 12,
           'part'        => 6,
           'question'    => "Compute d/dx [sin x].",
           'choices'     => json_encode([
               'cos x',
               '-sin x',
               'sec² x',
               '-cos x',
           ]),
           'answer'      => 'cos x',
           'explanation' => 'Basic derivative of sine is cosine.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 104
       $batch[] = [
           'subject_id'  => 12,
           'part'        => 6,
           'question'    => "Find the derivative of f(x)=e^{2x}.",
           'choices'     => json_encode([
               '2e^{2x}',
               'e^{2x}',
               '2xe^{2x}',
               'e^{x}',
           ]),
           'answer'      => '2e^{2x}',
           'explanation' => 'Chain rule: derivative of e^{2x} is 2e^{2x}.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 105
       $batch[] = [
           'subject_id'  => 12,
           'part'        => 6,
           'question'    => "Evaluate the limit: limₓ→0 (sin x)/x.",
           'choices'     => json_encode([
               '1',
               '0',
               'Undefined',
               '∞',
           ]),
           'answer'      => '1',
           'explanation' => 'Standard limit: (sin x)/x → 1 as x→0.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 106
       $batch[] = [
           'subject_id'  => 12,
           'part'        => 6,
           'question'    => "Find ∫ 2x dx.",
           'choices'     => json_encode([
               'x² + C',
               '2x + C',
               'x²',
               '2 + C',
           ]),
           'answer'      => 'x² + C',
           'explanation' => 'Integral of 2x is x² plus constant of integration.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 107
       $batch[] = [
           'subject_id'  => 12,
           'part'        => 6,
           'question'    => "Compute ∫₀^1 x dx.",
           'choices'     => json_encode([
               '1/2',
               '1',
               '1/3',
               '2',
           ]),
           'answer'      => '1/2',
           'explanation' => 'Antiderivative x²/2 from 0 to 1 yields 1/2.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 108
       $batch[] = [
           'subject_id'  => 12,
           'part'        => 6,
           'question'    => "Find the derivative of f(x)=ln x.",
           'choices'     => json_encode([
               '1/x',
               'ln x',
               'x ln x',
               'e^x',
           ]),
           'answer'      => '1/x',
           'explanation' => 'Derivative of natural log is 1/x.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 109
       $batch[] = [
           'subject_id'  => 12,
           'part'        => 6,
           'question'    => "Evaluate limₓ→∞ 1/x.",
           'choices'     => json_encode([
               '0',
               '1',
               '∞',
               '-∞',
           ]),
           'answer'      => '0',
           'explanation' => 'As x grows large, 1/x approaches 0.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 110
       $batch[] = [
           'subject_id'  => 12,
           'part'        => 6,
           'question'    => "Find the derivative of f(x)=x^3 + 2x.",
           'choices'     => json_encode([
               '3x² + 2',
               'x² + 2',
               '3x + 2',
               '3x² + x',
           ]),
           'answer'      => '3x² + 2',
           'explanation' => 'Derivative termwise: d/dx[x^3]=3x², d/dx[2x]=2.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 111
       $batch[] = [
           'subject_id'  => 12,
           'part'        => 6,
           'question'    => "Compute ∫ cos x dx.",
           'choices'     => json_encode([
               'sin x + C',
               '−sin x + C',
               'cos x + C',
               '−cos x + C',
           ]),
           'answer'      => 'sin x + C',
           'explanation' => 'Antiderivative of cos x is sin x plus constant.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 112
       $batch[] = [
           'subject_id'  => 12,
           'part'        => 6,
           'question'    => "Evaluate the limit: limₓ→0 (1 - cos x)/x².",
           'choices'     => json_encode([
               '1/2',
               '1',
               '0',
               '2',
           ]),
           'answer'      => '1/2',
           'explanation' => 'Standard limit using series expansion or L’Hôpital’s Rule.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 113
       $batch[] = [
           'subject_id'  => 12,
           'part'        => 6,
           'question'    => "Find d/dx [tan x].",
           'choices'     => json_encode([
               'sec² x',
               '1 + tan² x',
               'cos² x',
               'sec x tan x',
           ]),
           'answer'      => 'sec² x',
           'explanation' => 'Derivative of tan x is sec² x.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 114
       $batch[] = [
           'subject_id'  => 12,
           'part'        => 6,
           'question'    => "Compute ∫ e^x dx.",
           'choices'     => json_encode([
               'e^x + C',
               'e^x',
               'ln x + C',
               'x e^x + C',
           ]),
           'answer'      => 'e^x + C',
           'explanation' => 'Integral of exponential remains exponential plus constant.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 115
       $batch[] = [
           'subject_id'  => 12,
           'part'        => 6,
           'question'    => "Find the derivative of f(x)=ln(3x).",
           'choices'     => json_encode([
               '1/x',
               '3/x',
               '1/(3x)',
               'ln x',
           ]),
           'answer'      => '1/x',
           'explanation' => 'Chain rule: d/dx[ln(3x)] = 1/(3x)·3 = 1/x.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 116
       $batch[] = [
           'subject_id'  => 12,
           'part'        => 6,
           'question'    => "Evaluate limₓ→∞ (3x + 1)/(x - 2).",
           'choices'     => json_encode([
               '3',
               '1',
               '0',
               '∞',
           ]),
           'answer'      => '3',
           'explanation' => 'Divide numerator and denominator by x: (3 + 1/x)/(1 - 2/x) → 3.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 117
       $batch[] = [
           'subject_id'  => 12,
           'part'        => 6,
           'question'    => "Find the second derivative of f(x) = x³ - 4x.",
           'choices'     => json_encode([
               '6x',
               '3x² - 4',
               '6x - 4',
               '6x²',
           ]),
           'answer'      => '6x',
           'explanation' => 'First derivative 3x² - 4, second derivative is 6x.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 118
       $batch[] = [
           'subject_id'  => 12,
           'part'        => 6,
           'question'    => "Compute ∫ x e^x dx.",
           'choices'     => json_encode([
               '(x-1)e^x + C',
               'xe^x + C',
               'xe^x - e^x + C',
               'e^x + C',
           ]),
           'answer'      => 'xe^x - e^x + C',
           'explanation' => 'Integration by parts: ∫ x e^x dx = x e^x - ∫ e^x dx = x e^x - e^x + C.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 119
       $batch[] = [
           'subject_id'  => 12,
           'part'        => 6,
           'question'    => "Evaluate ∫₀^{π/2} cos x dx.",
           'choices'     => json_encode([
               '1',
               '0',
               '2',
               'π/2',
           ]),
           'answer'      => '1',
           'explanation' => 'Antiderivative of cos x is sin x; sin(π/2)-sin(0)=1-0=1.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 120
       $batch[] = [
           'subject_id'  => 12,
           'part'        => 6,
           'question'    => "Find d/dx [x² ln x].",
           'choices'     => json_encode([
               '2x ln x + x',
               '2x ln x + 2x',
               '2x ln x - 1',
               'x²/x + ln x',
           ]),
           'answer'      => '2x ln x + x',
           'explanation' => 'Use product rule: d(x²)=2x so 2x ln x + x²·(1/x)=2x ln x + x.',
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
