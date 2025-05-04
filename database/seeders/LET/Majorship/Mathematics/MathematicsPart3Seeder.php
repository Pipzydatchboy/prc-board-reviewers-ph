<?php

namespace Database\Seeders\LET\Majorship\Mathematics;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class MathematicsPart3Seeder extends Seeder
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

       // 41
       $batch[] = [
           'subject_id'  => 12,
           'part'        => 3,
           'question'    => "Which test determines if a relation is a function?",
           'choices'     => json_encode([
               'Vertical line test',
               'Horizontal line test',
               'Diagonal line test',
               'Circle test',
           ]),
           'answer'      => 'Vertical line test',
           'explanation' => 'A relation is a function if no vertical line intersects its graph more than once.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 42
       $batch[] = [
           'subject_id'  => 12,
           'part'        => 3,
           'question'    => "If f(x) = 2x^2 - 3x + 1, what is f(2)?",
           'choices'     => json_encode([
               '3',
               '5',
               '7',
               '9',
           ]),
           'answer'      => '3',
           'explanation' => 'Substitute x=2: 2(4)-6+1 = 8-6+1 = 3.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 43
       $batch[] = [
           'subject_id'  => 12,
           'part'        => 3,
           'question'    => "What is the domain of the function f(x)=√(x-1)?",
           'choices'     => json_encode([
               'x ≥ 1',
               'x > 1',
               'x ≤ 1',
               'x < 1',
           ]),
           'answer'      => 'x ≥ 1',
           'explanation' => 'Inside the square root must be nonnegative: x-1 ≥ 0 → x ≥ 1.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 44
       $batch[] = [
           'subject_id'  => 12,
           'part'        => 3,
           'question'    => "If f(x)=x+1 and g(x)=2x, find f(g(3)).",
           'choices'     => json_encode([
               '7',
               '8',
               '5',
               '9',
           ]),
           'answer'      => '7',
           'explanation' => 'g(3)=6, then f(6)=6+1=7.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 45
       $batch[] = [
           'subject_id'  => 12,
           'part'        => 3,
           'question'    => "What is the inverse of f(x)=3x-5?",
           'choices'     => json_encode([
               'f⁻¹(x)=(x+5)/3',
               'f⁻¹(x)=3x+5',
               'f⁻¹(x)=(x-5)/3',
               'f⁻¹(x)=x/3-5',
           ]),
           'answer'      => 'f⁻¹(x)=(x+5)/3',
           'explanation' => 'Swap x,y: x=3y-5 → y=(x+5)/3.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 46
       $batch[] = [
           'subject_id'  => 12,
           'part'        => 3,
           'question'    => "Evaluate the piecewise function f(x)= {x+2 if x<0; x^2 if x≥0} at x=-1.",
           'choices'     => json_encode([
               '1',
               '1/2',
               '0',
               '2',
           ]),
           'answer'      => '1',
           'explanation' => 'Since -1<0, f(-1)=(-1)+2=1.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 47
       $batch[] = [
           'subject_id'  => 12,
           'part'        => 3,
           'question'    => "Which function is odd?",
           'choices'     => json_encode([
               'f(x)=x^3',
               'f(x)=x^2',
               'f(x)=x+1',
               'f(x)=1/x^2',
           ]),
           'answer'      => 'f(x)=x^3',
           'explanation' => 'An odd function satisfies f(-x)=-f(x); x^3 does.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 48
       $batch[] = [
           'subject_id'  => 12,
           'part'        => 3,
           'question'    => "What is the slope of the line through points (1,2) and (3,6)?",
           'choices'     => json_encode([
               '2',
               '4',
               '1/2',
               '3',
           ]),
           'answer'      => '2',
           'explanation' => 'Slope=(6-2)/(3-1)=4/2=2.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 49
       $batch[] = [
           'subject_id'  => 12,
           'part'        => 3,
           'question'    => "Which equation represents a line with slope 3 and y-intercept -1?",
           'choices'     => json_encode([
               'y = 3x -1',
               'y = x +3',
               'y = -3x +1',
               'y = 3 - x',
           ]),
           'answer'      => 'y = 3x -1',
           'explanation' => 'Slope-intercept form y=mx+b with m=3, b=-1.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 50
       $batch[] = [
           'subject_id'  => 12,
           'part'        => 3,
           'question'    => "Find the vertex of y=x^2-4x+3.",
           'choices'     => json_encode([
               '(2, -1)',
               '(1, 0)',
               '(2, -4)',
               '(4, -1)',
           ]),
           'answer'      => '(2, -1)',
           'explanation' => 'Vertex at x=-b/(2a)=4/2=2; y=4-8+3=-1.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 51
       $batch[] = [
           'subject_id'  => 12,
           'part'        => 3,
           'question'    => "What is the axis of symmetry for y=x^2-4x+3?",
           'choices'     => json_encode([
               'x=2',
               'y=2',
               'x=-2',
               'y=-2',
           ]),
           'answer'      => 'x=2',
           'explanation' => 'Axis of symmetry x=-b/(2a)=2.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 52
       $batch[] = [
           'subject_id'  => 12,
           'part'        => 3,
           'question'    => "Describe the end behavior of y=2x^3.",
           'choices'     => json_encode([
               'Falls left, rises right',
               'Rises left, falls right',
               'Rises both ends',
               'Falls both ends',
           ]),
           'answer'      => 'Falls left, rises right',
           'explanation' => 'Odd-degree positive leading: left → -∞, right → ∞.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 53
       $batch[] = [
           'subject_id'  => 12,
           'part'        => 3,
           'question'    => "What is f(x)=2^x called?",
           'choices'     => json_encode([
               'Exponential function',
               'Logarithmic function',
               'Linear function',
               'Quadratic function',
           ]),
           'answer'      => 'Exponential function',
           'explanation' => 'Variable in the exponent defines an exponential function.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 54
       $batch[] = [
           'subject_id'  => 12,
           'part'        => 3,
           'question'    => "Which function is the inverse of f(x)=e^x?",
           'choices'     => json_encode([
               'f⁻¹(x)=ln x',
               'f⁻¹(x)=e ln x',
               'f⁻¹(x)=1/e^x',
               'f⁻¹(x)=log x',
           ]),
           'answer'      => 'f⁻¹(x)=ln x',
           'explanation' => 'The natural logarithm is the inverse of the natural exponential.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 55
       $batch[] = [
           'subject_id'  => 12,
           'part'        => 3,
           'question'    => "What is the reflection of y=|x| across the x-axis?",
           'choices'     => json_encode([
               'y=-|x|',
               'y=|x|-1',
               'y=|x|+1',
               'y=1-|x|',
           ]),
           'answer'      => 'y=-|x|',
           'explanation' => 'Reflection across x-axis multiplies output by -1.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 56
       $batch[] = [
           'subject_id'  => 12,
           'part'        => 3,
           'question'    => "Which represents a vertical stretch by factor 3 of y=x^2?",
           'choices'     => json_encode([
               'y=3x^2',
               'y=x^2/3',
               'y=(3x)^2',
               'y=x^3',
           ]),
           'answer'      => 'y=3x^2',
           'explanation' => 'Multiplying the function by 3 stretches vertically.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 57
       $batch[] = [
           'subject_id'  => 12,
           'part'        => 3,
           'question'    => "Find the x-intercept of y=2x-4.",
           'choices'     => json_encode([
               '(2,0)',
               '(0,2)',
               '(4,0)',
               '(0,4)',
           ]),
           'answer'      => '(2,0)',
           'explanation' => 'Set y=0: 2x-4=0 → x=2.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 58
       $batch[] = [
           'subject_id'  => 12,
           'part'        => 3,
           'question'    => "Determine the slope of the line connecting (0,5) and (3,11).",
           'choices'     => json_encode([
               '2',
               '3',
               '1/2',
               '11/3',
           ]),
           'answer'      => '2',
           'explanation' => 'Slope=(11-5)/(3-0)=6/3=2.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 59
       $batch[] = [
           'subject_id'  => 12,
           'part'        => 3,
           'question'    => "What is the point-slope form of a line with slope m and passing through (x1,y1)?",
           'choices'     => json_encode([
               'y - y1 = m(x - x1)',
               'y = mx + b',
               'y - m = x - 1',
               'y = m(x - x1) + y1',
           ]),
           'answer'      => 'y - y1 = m(x - x1)',
           'explanation' => 'Point-slope form is defined as such.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 60
       $batch[] = [
           'subject_id'  => 12,
           'part'        => 3,
           'question'    => "Find the intersection of y=2x+1 and y=-x+4.",
           'choices'     => json_encode([
               '(1,3)',
               '(2,5)',
               '(-1,3)',
               '(3,7)',
           ]),
           'answer'      => '(1,3)',
           'explanation' => 'Set 2x+1=-x+4 → 3x=3 → x=1; y=2(1)+1=3.',
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
