<?php

namespace Database\Seeders\CLE\Criminalistics;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CriminalisticsPart6Seeder extends Seeder
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

//1
$batch[] = [
    'subject_id'  => 24,
    'part'        => 6,
    'question'    => 'Which branch of ballistics examines bullets and cartridge cases after they have been fired?',
    'choices'     => json_encode([
        'Terminal ballistics',
        'Internal ballistics',
        'External ballistics',
        'Transitional ballistics',
    ]),
    'answer'      => 'Terminal ballistics',
    'explanation' => 'Terminal ballistics studies projectile behavior and effects upon impact with targets.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//2
$batch[] = [
    'subject_id'  => 24,
    'part'        => 6,
    'question'    => 'Which characteristic of a fired bullet is considered an individual characteristic?',
    'choices'     => json_encode([
        'Rifling striations',
        'Caliber size',
        'Bullet weight',
        'Number of lands and grooves',
    ]),
    'answer'      => 'Rifling striations',
    'explanation' => 'Striations are microscopic marks imparted by unique barrel imperfections.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//3
$batch[] = [
    'subject_id'  => 24,
    'part'        => 6,
    'question'    => 'Which tool is used to compare striations on fired bullets under high magnification?',
    'choices'     => json_encode([
        'Comparison microscope',
        'Electron microscope',
        'Stereomicroscope',
        'Scanning electron microscope',
    ]),
    'answer'      => 'Comparison microscope',
    'explanation' => 'Comparison microscopes allow side-by-side viewing of two bullets to identify matching striae.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//4
$batch[] = [
    'subject_id'  => 24,
    'part'        => 6,
    'question'    => 'Which term describes the shadowing effect around a bullet hole indicating close-range firing?',
    'choices'     => json_encode([
        'Grease ring',
        'Stippling',
        'Halo effect',
        'Burn pattern',
    ]),
    'answer'      => 'Grease ring',
    'explanation' => 'A grease ring forms when oils and unburned powder adhere to the wound edge at close range.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//5
$batch[] = [
    'subject_id'  => 24,
    'part'        => 6,
    'question'    => 'Which ballistic characteristic helps determine if two cartridge casings were fired from the same firearm?',
    'choices'     => json_encode([
        'Firing pin impressions',
        'Caliber marking',
        'Casing weight',
        'Headstamp stampings',
    ]),
    'answer'      => 'Firing pin impressions',
    'explanation' => 'Firing pin strikes leave unique indentations on the primer of cartridge cases.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//6
$batch[] = [
    'subject_id'  => 24,
    'part'        => 6,
    'question'    => 'Which range estimation method uses the spread pattern of pellets from a shotgun discharge?',
    'choices'     => json_encode([
        'Shot pattern analysis',
        'Trajectory matching',
        'Powder tattooing analysis',
        'Halo measurement',
    ]),
    'answer'      => 'Shot pattern analysis',
    'explanation' => 'Pellet spread increases with distance, allowing estimation of firing range.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//7
$batch[] = [
    'subject_id'  => 24,
    'part'        => 6,
    'question'    => 'Which phenomenon refers to the deformation and flattening of bullets upon impact?',
    'choices'     => json_encode([
        'Mushrooming',
        'Ricochet',
        'Fragmentation',
        'Yawing',
    ]),
    'answer'      => 'Mushrooming',
    'explanation' => 'Mushrooming describes the expansion of soft lead bullets as they deform on impact.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//8
$batch[] = [
    'subject_id'  => 24,
    'part'        => 6,
    'question'    => 'Which apparatus in the lab is used to stabilize and test-fire firearms into a water trap?',
    'choices'     => json_encode([
        'Test-firing cradle',
        'Ballistic pendulum',
        'Pressure gauge',
        'Firing tank',
    ]),
    'answer'      => 'Test-firing cradle',
    'explanation' => 'A cradle secures firearms to consistently fire bullets into a recovery tank for examination.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//9
$batch[] = [
    'subject_id'  => 24,
    'part'        => 6,
    'question'    => 'Which measurement refers to the interior diameter of a firearm barrel?',
    'choices'     => json_encode([
        'Caliber',
        'Gauge',
        'Length of pull',
        'Twist rate',
    ]),
    'answer'      => 'Caliber',
    'explanation' => 'Caliber is the nominal diameter of the bore or bullet, usually expressed in inches or millimeters.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//10
$batch[] = [
    'subject_id'  => 24,
    'part'        => 6,
    'question'    => 'Which ballistic evidence database links crime guns by their unique markings across jurisdictions?',
    'choices'     => json_encode([
        'NIBIN',
        'CODIS',
        'AFIS',
        'IBIS',
    ]),
    'answer'      => 'NIBIN',
    'explanation' => 'The National Integrated Ballistic Information Network stores and compares ballistic signatures from crime scenes.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//11
$batch[] = [
    'subject_id'  => 24,
    'part'        => 6,
    'question'    => 'Which ballistic tool uses laser light to document and compare bullet trajectories at a crime scene?',
    'choices'     => json_encode([
        'Laser trajectory imaging',
        'Comparison microscope',
        'Trajectory rods',
        'Ballistic chronograph',
    ]),
    'answer'      => 'Laser trajectory imaging',
    'explanation' => 'Laser imaging captures the exact 3D path of bullet trajectories for analytical reconstruction.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//12
$batch[] = [
    'subject_id'  => 24,
    'part'        => 6,
    'question'    => 'Which term describes the angle at which a bullet deviates after striking a surface?',
    'choices'     => json_encode([
        'Ricochet angle',
        'Entry angle',
        'Impact angle',
        'Departure angle',
    ]),
    'answer'      => 'Ricochet angle',
    'explanation' => 'Ricochet angle is the deviation between the original trajectory and the path after deflection.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//13
$batch[] = [
    'subject_id'  => 24,
    'part'        => 6,
    'question'    => 'Which ballistic coefficient influences a bullet’s stability and trajectory over distance?',
    'choices'     => json_encode([
        'Ballistic coefficient (BC)',
        'Sectional density',
        'Muzzle velocity',
        'Twist rate',
    ]),
    'answer'      => 'Ballistic coefficient (BC)',
    'explanation' => 'BC measures a projectile’s ability to overcome air resistance in flight.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//14
$batch[] = [
    'subject_id'  => 24,
    'part'        => 6,
    'question'    => 'Which observation indicates a bullet was fired at very close range?',
    'choices'     => json_encode([
        'Tattoos from gunpowder stippling',
        'Uniform soot pattern',
        'Clean entry hole',
        'Elongated exit wound',
    ]),
    'answer'      => 'Tattoos from gunpowder stippling',
    'explanation' => 'Gunpowder particles embed in skin at close range, creating stippling or tattooing.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//15
$batch[] = [
    'subject_id'  => 24,
    'part'        => 6,
    'question'    => 'Which device measures bullet velocity just as it exits the muzzle?',
    'choices'     => json_encode([
        'Ballistic chronograph',
        'Pressure gauge',
        'Laser rangefinder',
        'High-speed camera',
    ]),
    'answer'      => 'Ballistic chronograph',
    'explanation' => 'Chronographs record the time it takes a bullet to pass between two sensors to calculate velocity.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//16
$batch[] = [
    'subject_id'  => 24,
    'part'        => 6,
    'question'    => 'Which legal requirement must be followed before test-firing a seized firearm?',
    'choices'     => json_encode([
        'Approved search warrant or court order',
        'Owner consent only',
        'Supervisor verbal approval',
        'Manufacturer license',
    ]),
    'answer'      => 'Approved search warrant or court order',
    'explanation' => 'Legal authorization ensures compliance with search and seizure procedures when test-firing evidence.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//17
$batch[] = [
    'subject_id'  => 24,
    'part'        => 6,
    'question'    => 'Which term describes the path a bullet takes in flight before striking a target?',
    'choices'     => json_encode([
        'Trajectory',
        'Parabola',
        'Series',
        'Curve',
    ]),
    'answer'      => 'Trajectory',
    'explanation' => 'Trajectory is the curved path of a projectile under the influence of gravity and air resistance.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//18
$batch[] = [
    'subject_id'  => 24,
    'part'        => 6,
    'question'    => 'Which phenomenon causes a bullet to tumble and create a larger wound profile after impact?',
    'choices'     => json_encode([
        'Yaw',
        'Ricochet',
        'Overpenetration',
        'Fragmentation',
    ]),
    'answer'      => 'Yaw',
    'explanation' => 'Yaw is the instability-induced rotation of a bullet, increasing its wounding potential.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//19
$batch[] = [
    'subject_id'  => 24,
    'part'        => 6,
    'question'    => 'Which safety measure is essential when preparing a ballistic range for test-firing?',
    'choices'     => json_encode([
        'Backstop capable of stopping projectiles',
        'Fireproof flooring',
        'Lead containment pits only',
        'Concrete walls alone',
    ]),
    'answer'      => 'Backstop capable of stopping projectiles',
    'explanation' => 'A proper backstop prevents stray bullets from escaping the range and ensures safety.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//20
$batch[] = [
    'subject_id'  => 24,
    'part'        => 6,
    'question'    => 'Which term refers to the transfer of gunpowder residues from the firearm to testing media?',
    'choices'     => json_encode([
        'Gunshot residue (GSR) sampling',
        'Powder ring analysis',
        'Residue plating',
        'Ballistic imprinting',
    ]),
    'answer'      => 'Gunshot residue (GSR) sampling',
    'explanation' => 'GSR sampling collects particles from hands or surfaces to link suspects to firearm discharge.',
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
