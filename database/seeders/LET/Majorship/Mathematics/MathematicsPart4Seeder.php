<?php

namespace Database\Seeders\LET\Majorship\Mathematics;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class MathematicsPart4Seeder extends Seeder
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

       // 61
       $batch[] = [
        'subject_id'  => 12,
        'part'        => 4,
        'question'    => "An inscribed angle that intercepts a semicircle measures ___ degrees.",
        'choices'     => json_encode([
            '45°',
            '90°',
            '180°',
            '120°',
        ]),
        'answer'      => '90°',
        'explanation' => 'An inscribed angle intercepting a semicircle is a right angle.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ];
       
       // 62
       $batch[] = [
           'subject_id'  => 12,
           'part'        => 4,
           'question'    => "In a parallelogram, opposite sides are: ",
           'choices'     => json_encode([
               'Equal and parallel',
               'Equal only',
               'Parallel only',
               'Perpendicular',
           ]),
           'answer'      => 'Equal and parallel',
           'explanation' => 'Opposite sides of a parallelogram are both equal in length and parallel.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 63
       $batch[] = [
           'subject_id'  => 12,
           'part'        => 4,
           'question'    => "Find the area of a triangle with base 10 and height 6.",
           'choices'     => json_encode([
               '30',
               '60',
               '16',
               '36',
           ]),
           'answer'      => '30',
           'explanation' => 'Area = (1/2) × base × height = 0.5 × 10 × 6 = 30.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 64
       $batch[] = [
           'subject_id'  => 12,
           'part'        => 4,
           'question'    => "What is the length of the hypotenuse in a right triangle with legs 3 and 4?",
           'choices'     => json_encode([
               '5',
               '6',
               '7',
               '√13',
           ]),
           'answer'      => '5',
           'explanation' => 'By Pythagorean theorem: √(3²+4²)=√(9+16)=√25=5.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 65
       $batch[] = [
           'subject_id'  => 12,
           'part'        => 4,
           'question'    => "What is the distance between points (1,2) and (4,6)?",
           'choices'     => json_encode([
               '5',
               '6',
               '√29',
               '√13',
           ]),
           'answer'      => '5',
           'explanation' => 'Distance = √[(4-1)²+(6-2)²]=√(9+16)=√25=5.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 66
       $batch[] = [
           'subject_id'  => 12,
           'part'        => 4,
           'question'    => "Find the midpoint of the segment joining (2,3) and (6,7).",
           'choices'     => json_encode([
               '(4,5)',
               '(3,5)',
               '(4,3)',
               '(5,5)',
           ]),
           'answer'      => '(4,5)',
           'explanation' => 'Midpoint = ((2+6)/2,(3+7)/2)=(4,5).',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 67
       $batch[] = [
           'subject_id'  => 12,
           'part'        => 4,
           'question'    => "What is the slope of a line perpendicular to one having slope 2?",
           'choices'     => json_encode([
               '-1/2',
               '1/2',
               '2',
               '-2',
           ]),
           'answer'      => '-1/2',
           'explanation' => 'Perpendicular slopes multiply to -1: m2=-1/2.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 68
       $batch[] = [
           'subject_id'  => 12,
           'part'        => 4,
           'question'    => "Which equation represents a circle with center (1, -2) and radius 3?",
           'choices'     => json_encode([
               '(x-1)^2+(y+2)^2=9',
               '(x+1)^2+(y-2)^2=9',
               '(x-1)^2+(y-2)^2=9',
               '(x+1)^2+(y+2)^2=9',
           ]),
           'answer'      => '(x-1)^2+(y+2)^2=9',
           'explanation' => 'Standard form (x-h)^2+(y-k)^2=r^2 with h=1,k=-2,r=3.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 69
       $batch[] = [
           'subject_id'  => 12,
           'part'        => 4,
           'question'    => "The sum of interior angles of a convex hexagon is:",
           'choices'     => json_encode([
               '720°',
               '540°',
               '900°',
               '1080°',
           ]),
           'answer'      => '720°',
           'explanation' => 'Sum = (n-2)*180 = 4*180 = 720.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 70
       $batch[] = [
           'subject_id'  => 12,
           'part'        => 4,
           'question'    => "Area of a rectangle with length 8 and width 5 is:",
           'choices'     => json_encode([
               '40',
               '13',
               '26',
               '20',
           ]),
           'answer'      => '40',
           'explanation' => 'Area = length × width = 8×5 = 40.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 71
       $batch[] = [
           'subject_id'  => 12,
           'part'        => 4,
           'question'    => "What is the area of a circle with radius 4? Use π approximation.",
           'choices'     => json_encode([
               '16π',
               '8π',
               '32π',
               '4π',
           ]),
           'answer'      => '16π',
           'explanation' => 'Area = πr^2 = π(4^2) = 16π.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 72
       $batch[] = [
           'subject_id'  => 12,
           'part'        => 4,
           'question'    => "Circumference of a circle with diameter 10 is:",
           'choices'     => json_encode([
               '10π',
               '20π',
               '5π',
               'π',
           ]),
           'answer'      => '10π',
           'explanation' => 'Circumference = πd = π(10) = 10π.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 73
       $batch[] = [
           'subject_id'  => 12,
           'part'        => 4,
           'question'    => "Volume of a rectangular prism 3×4×5 is:",
           'choices'     => json_encode([
               '60',
               '12',
               '45',
               '15',
           ]),
           'answer'      => '60',
           'explanation' => 'Volume = length×width×height = 3×4×5 = 60.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 74
       $batch[] = [
           'subject_id'  => 12,
           'part'        => 4,
           'question'    => "Volume of a cylinder with radius 2 and height 6 is:",
           'choices'     => json_encode([
               '24π',
               '12π',
               '8π',
               '4π',
           ]),
           'answer'      => '24π',
           'explanation' => 'Volume = πr^2h = π(4)(6) = 24π.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 75
       $batch[] = [
           'subject_id'  => 12,
           'part'        => 4,
           'question'    => "If two triangles are similar with ratio of sides 2:3, ratio of areas is:",
           'choices'     => json_encode([
               '4:9',
               '2:3',
               '3:2',
               '6:9',
           ]),
           'answer'      => '4:9',
           'explanation' => 'Area scale factor is square of side ratio: (2/3)^2=4/9.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 76
       $batch[] = [
           'subject_id'  => 12,
           'part'        => 4,
           'question'    => "Area of a trapezoid with bases 6, 10 and height 4 is:",
           'choices'     => json_encode([
               '32',
               '16',
               '24',
               '40',
           ]),
           'answer'      => '32',
           'explanation' => 'Area = (1/2)(b1+b2)h = 0.5(16)(4)=32.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 77
       $batch[] = [
           'subject_id'  => 12,
           'part'        => 4,
           'question'    => "When a transversal crosses parallel lines, corresponding angles are:",
           'choices'     => json_encode([
               'Equal',
               'Supplementary',
               'Complementary',
               'Vertical',
           ]),
           'answer'      => 'Equal',
           'explanation' => 'Corresponding angles in parallel lines and transversal are congruent.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 78
       $batch[] = [
           'subject_id'  => 12,
           'part'        => 4,
           'question'    => "Find centroid of triangle with vertices (0,0),(6,0),(0,6).",
           'choices'     => json_encode([
               '(2,2)',
               '(3,3)',
               '(4,4)',
               '(1,1)',
           ]),
           'answer'      => '(2,2)',
           'explanation' => 'Centroid = average of x-coords and y-coords: (0+6+0)/3=2, similarly y=2.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 79
       $batch[] = [
           'subject_id'  => 12,
           'part'        => 4,
           'question'    => "Reflection of point (3,4) across y-axis is:",
           'choices'     => json_encode([
               '(-3,4)',
               '(3,-4)',
               '(-3,-4)',
               '(4,3)',
           ]),
           'answer'      => '(-3,4)',
           'explanation' => 'Reflection across y-axis changes x to -x, y remains.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 80
       $batch[] = [
           'subject_id'  => 12,
           'part'        => 4,
           'question'    => "Equation of perpendicular bisector of segment joining (0,0) and (4,0) is:",
           'choices'     => json_encode([
               'x=2',
               'y=2',
               'x=0',
               'y=0',
           ]),
           'answer'      => 'x=2',
           'explanation' => 'Midpoint is (2,0) and perpendicular bisector is vertical line x=2.',
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
            $this->command->warn("Part 4 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 4. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 4.");
    }
}
