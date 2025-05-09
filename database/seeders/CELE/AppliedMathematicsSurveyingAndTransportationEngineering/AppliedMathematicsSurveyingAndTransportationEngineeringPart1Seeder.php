<?php

namespace Database\Seeders\CELE\AppliedMathematicsSurveyingAndTransportationEngineering;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AppliedMathematicsSurveyingAndTransportationEngineeringPart1Seeder extends Seeder
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
        'subject_id'  => 38,
        'part'        => 1,
        'question'    => 'What is the solution to the differential equation dy/dx = ky, given y(0)=y₀?',
        'choices'     => json_encode([
            'y = y₀ e^{kx}',
            'y = ky₀ x',
            'y = y₀ + kx',
            'y = y₀ e^{-kx}',
        ]),
        'answer'      => 'y = y₀ e^{kx}',
        'explanation' => 'The general solution to dy/dx = ky is y = Ce^{kx}; applying y(0)=y₀ gives C=y₀.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //2
    [
        'subject_id'  => 38,
        'part'        => 1,
        'question'    => 'In Simpson’s rule for numerical integration, the interval [a,b] is divided into how many subintervals?',
        'choices'     => json_encode([
            'An even number',
            'An odd number',
            'A prime number',
            'Any number',
        ]),
        'answer'      => 'An even number',
        'explanation' => 'Simpson’s rule requires an even number of subintervals for parabolic approximation.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //3
    [
        'subject_id'  => 38,
        'part'        => 1,
        'question'    => 'The bearing of a line is given as S20°E. What is its azimuth?',
        'choices'     => json_encode([
            '160°',
            '20°',
            '200°',
            '340°',
        ]),
        'answer'      => '160°',
        'explanation' => 'S20°E corresponds to an azimuth of 180° - 20° = 160°.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //4
    [
        'subject_id'  => 38,
        'part'        => 1,
        'question'    => 'In level surveying, the difference in elevation between two points is determined by the difference of what readings?',
        'choices'     => json_encode([
            'Back sight and front sight',
            'Horizontal and vertical distances',
            'Azimuth and inclination',
            'Chain and tape reading',
        ]),
        'answer'      => 'Back sight and front sight',
        'explanation' => 'Elevation change = back sight reading - front sight reading on a level rod.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //5
    [
        'subject_id'  => 38,
        'part'        => 1,
        'question'    => 'Which error adjustment method distributes bearing misclosure equally among the traverse stations?',
        'choices'     => json_encode([
            'Compass rule',
            'Bowditch rule',
            'Transit rule',
            'Least squares',
        ]),
        'answer'      => 'Bowditch rule',
        'explanation' => 'The Bowditch (compass) rule apportions errors proportionally to traverse leg lengths.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //6
    [
        'subject_id'  => 38,
        'part'        => 1,
        'question'    => 'What is the design speed if the minimum radius of a simple curve is 200 m and max superelevation e=0.07, side friction f=0.15? (V^2/R = 127(e+f))',
        'choices'     => json_encode([
            '60 km/h',
            '80 km/h',
            '100 km/h',
            '120 km/h',
        ]),
        'answer'      => '80 km/h',
        'explanation' => 'V = sqrt(127*R*(e+f)) = sqrt(127*200*0.22)≈80 km/h.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //7
    [
        'subject_id'  => 38,
        'part'        => 1,
        'question'    => 'In traffic flow theory, density equals which ratio?',
        'choices'     => json_encode([
            'Flow/Speed',
            'Speed/Flow',
            'Flow×Speed',
            '1/(Flow×Speed)',
        ]),
        'answer'      => 'Flow/Speed',
        'explanation' => 'Density (veh/km) = flow (veh/h) divided by speed (km/h).',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //8
    [
        'subject_id'  => 38,
        'part'        => 1,
        'question'    => 'Which method estimates earthwork volumes by averaging end-area calculations?',
        'choices'     => json_encode([
            'Prismoidal formula',
            'Triangular formula',
            'End-area (average) method',
            'Cross-section method',
        ]),
        'answer'      => 'End-area (average) method',
        'explanation' => 'Volume ≈ (A1 + A2)/2 × distance between sections.',
        'created_at'  => $now,
        'updated_at'  => $now
    ],
    //9
    [
        'subject_id'  => 38,
        'part'        => 1,
        'question'    => 'The present worth of an annuity due factor (P/A)_due at i% for n periods equals:',
        'choices'     => json_encode([
            '(1+i)( (1 – (1+i)^{-n})/i )',
            '( (1 – (1+i)^{-n})/i )',
            '(1 – (1+i)^{-n})',
            '(1+i)^{-n}/i',
        ]),
        'answer'      => '(1+i)( (1 – (1+i)^{-n})/i )',
        'explanation' => 'Annuity due factor = ordinary annuity factor × (1+i).',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //10
    [
        'subject_id'  => 38,
        'part'        => 1,
        'question'    => 'In plane table surveying, which method uses a ray drawn from the station to a point and then intersecting rays from two known points?',
        'choices'     => json_encode([
            'Intersection method',
            'Radiation method',
            'Traversing method',
            'Resection method',
        ]),
        'answer'      => 'Resection method',
        'explanation' => 'Resection locates the station by intersection of rays from known points.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //11
    [
        'subject_id'  => 38,
        'part'        => 1,
        'question'    => 'Which transition curve ensures gradual change of curvature between tangent and circular arc?',
        'choices'     => json_encode([
            'Clothoid (spiral)',
            'Parabolic',
            'Circular',
            'Cubic spline',
        ]),
        'answer'      => 'Clothoid (spiral)',
        'explanation' => 'Clothoid has curvature proportional to length, providing smooth transition.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //12
    [
        'subject_id'  => 38,
        'part'        => 1,
        'question'    => 'In probability, the expected number of successes in n Bernoulli trials is:',
        'choices'     => json_encode([
            'n p',
            'n q',
            'p/q',
            'npq',
        ]),
        'answer'      => 'n p',
        'explanation' => 'For Bernoulli(p), expected successes = n × p.',
        'created_at'  => $now,
        'updated_at'  => $now
    ],
    //13
    [
        'subject_id'  => 38,
        'part'        => 1,
        'question'    => 'Which optimization technique solves linear programming problems?',
        'choices'     => json_encode([
            'Simplex method',
            'Newton-Raphson',
            'Runge-Kutta',
            'Gauss-Seidel',
        ]),
        'answer'      => 'Simplex method',
        'explanation' => 'The Simplex algorithm iteratively finds optimum vertices of feasible region.',
        'created_at'  => $now,
        'updated_at'  => $now
    ],
    //14
    [
        'subject_id'  => 38,
        'part'        => 1,
        'question'    => 'The transit theodolite measures which two angles?',
        'choices'     => json_encode([
            'Horizontal and vertical angles',
            'Azimuth and elevation',
            'Bearing and inclination',
            'Latitude and longitude',
        ]),
        'answer'      => 'Horizontal and vertical angles',
        'explanation' => 'A transit theodolite measures both horizontal and vertical angles for surveying.',
        'created_at'  => $now,
        'updated_at'  => $now
    ],
    //15
    [
        'subject_id'  => 38,
        'part'        => 1,
        'question'    => 'In traffic signal design, the cycle length (C) can be estimated by Webster’s formula C = (1.5L + 5)/(1 – Y). What does L represent?',
        'choices'     => json_encode([
            'Total lost time per cycle (sec)',
            'Total green time (sec)',
            'Queue length (veh)',
            'Saturation flow rate (veh/h)',
        ]),
        'answer'      => 'Total lost time per cycle (sec)',
        'explanation' => 'L is the sum of start-up and clearance lost times in seconds.',
        'created_at'  => $now,
        'updated_at'  => $now
    ],
    //16
    [
        'subject_id'  => 38,
        'part'        => 1,
        'question'    => 'Which survey instrument is used for setting out circular curves in highway alignment?',
        'choices'     => json_encode([
            'Theodolite',
            'Tachymeter',
            'Level',
            'Total station',
        ]),
        'answer'      => 'Theodolite',
        'explanation' => 'Theodolite computes and sets out precise horizontal and vertical angles for curves.',
        'created_at'  => $now,
        'updated_at'  => $now
    ],
    //17
    [
        'subject_id'  => 38,
        'part'        => 1,
        'question'    => 'In engineering economics, the internal rate of return (IRR) is the discount rate that makes the net present value (NPV) equal to what?',
        'choices'     => json_encode([
            'Zero',
            'Positive',
            'Negative',
            'One',
        ]),
        'answer'      => 'Zero',
        'explanation' => 'IRR solves for discount rate where NPV of cash flows = 0.',
        'created_at'  => $now,
        'updated_at'  => $now
    ],
    //18
    [
        'subject_id'  => 38,
        'part'        => 1,
        'question'    => 'Which coordinate method computes area and centroid easily for irregular shapes?',
        'choices'     => json_encode([
            'Gauss’s area formula (shoelace)',
            'Trapezoidal rule',
            'Simpson’s rule',
            'Rectangular rule',
        ]),
        'answer'      => 'Gauss’s area formula (shoelace)',
        'explanation' => 'Shoelace formula uses vertex coordinates to find polygon area and centroid.',
        'created_at'  => $now,
        'updated_at'  => $now
    ],
    //19
    [
        'subject_id'  => 38,
        'part'        => 1,
        'question'    => 'In highway design, the stopping sight distance (SSD) includes reaction distance and braking distance. What factor influences reaction distance?',
        'choices'     => json_encode([
            'Driver perception-reaction time',
            'Pavement friction factor',
            'Vehicle weight',
            'Superelevation rate',
        ]),
        'answer'      => 'Driver perception-reaction time',
        'explanation' => 'Reaction distance = speed × perception-reaction time.',
        'created_at'  => $now,
        'updated_at'  => $now
    ],
    //20
    [
        'subject_id'  => 38,
        'part'        => 1,
        'question'    => 'Which numerical method solves nonlinear algebraic equations by successive approximation using derivatives?',
        'choices'     => json_encode([
            'Newton-Raphson method',
            'Bisection method',
            'Trapezoidal rule',
            'Secant method',
        ]),
        'answer'      => 'Newton-Raphson method',
        'explanation' => 'Newton-Raphson uses function derivative to iterate to root.',
        'created_at'  => $now,
        'updated_at'  => $now
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
            $this->command->warn("Part 1 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 1. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 1.");
    }
}
