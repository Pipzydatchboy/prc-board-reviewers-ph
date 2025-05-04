<?php

namespace Database\Seeders\LET\Majorship\TLE;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class TLEPart7Seeder extends Seeder
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
     

       // Part 7 – Carpentry & Masonry – Question 1
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 7,
           'question'     => 'Which tool is used to drive nails into wood?',
           'choices'      => json_encode([
               'Claw hammer',
               'Chisel',
               'Saw',
               'Plane',
           ]),
           'answer'       => 'Claw hammer',
           'explanation'  => 'A claw hammer is designed for driving and removing nails in carpentry tasks.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Question 2
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 7,
           'question'     => 'What type of saw is ideal for cutting across the grain of wood?',
           'choices'      => json_encode([
               'Crosscut saw',
               'Rip saw',
               'Coping saw',
               'Back saw',
           ]),
           'answer'       => 'Crosscut saw',
           'explanation'  => 'A crosscut saw has teeth shaped to cut smoothly across wood fibers.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Question 3
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 7,
           'question'     => 'Which joint is commonly used to join two pieces of wood at a right angle without visible end grain?',
           'choices'      => json_encode([
               'Mortise and tenon',
               'Dowel joint',
               'Butt joint',
               'Lap joint',
           ]),
           'answer'       => 'Mortise and tenon',
           'explanation'  => 'Mortise and tenon provides strong, neat right-angle connections without exposed end grain.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Question 4
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 7,
           'question'     => 'What is the purpose of a spirit level in carpentry?',
           'choices'      => json_encode([
               'Check horizontal and vertical alignment',
               'Measure distances',
               'Cut straight lines',
               'Mark curves',
           ]),
           'answer'       => 'Check horizontal and vertical alignment',
           'explanation'  => 'A spirit level contains a vial to ensure surfaces are level or plumb.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Question 5
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 7,
           'question'     => 'In masonry, which type of mortar mix ratio is standard for general bricklaying?',
           'choices'      => json_encode([
               '1:3 cement to sand',
               '1:1 cement to sand',
               '1:5 cement to sand',
               '1:7 cement to sand',
           ]),
           'answer'       => '1:3 cement to sand',
           'explanation'  => 'A 1:3 ratio provides adequate strength and workability for typical brick walls.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Question 6
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 7,
           'question'     => 'What is the main function of aggregate in a concrete mix?',
           'choices'      => json_encode([
               'Provide bulk and strength',
               'Act as a binder',
               'Increase hydration',
               'Control setting time',
           ]),
           'answer'       => 'Provide bulk and strength',
           'explanation'  => 'Aggregates like sand and gravel form the concrete skeleton, adding volume and strength.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Question 7
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 7,
           'question'     => 'Which test measures the consistency of fresh concrete?',
           'choices'      => json_encode([
               'Slump test',
               'Compression test',
               'Tensile test',
               'Flexural test',
           ]),
           'answer'       => 'Slump test',
           'explanation'  => 'The slump test evaluates workability and water content by measuring concrete deformation.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Question 8
       $batch[] = [
           'subject_id'   => 16,
           'part'         =>  7,
           'question'     => 'What safety gear is essential when cutting wood or masonry materials?',
           'choices'      => json_encode([
               'Safety goggles',
               'Ear plugs',
               'Work boots',
               'Dust mask',
           ]),
           'answer'       => 'Safety goggles',
           'explanation'  => 'Goggles protect eyes from flying debris during cutting and chiseling.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Question 9
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 7,
           'question'     => 'Which tool is used to smooth and level mortar joints in brickwork?',
           'choices'      => json_encode([
               'Joint raker',
               'Trowel',
               'Mallet',
               'Wire brush',
           ]),
           'answer'       => 'Joint raker',
           'explanation'  => 'A joint raker removes excess mortar to create clean, uniform joints.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Question 10
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 7,
           'question'     => 'What is the purpose of a chalk line in carpentry layout?',
           'choices'      => json_encode([
               'Mark straight reference lines',
               'Measure angles',
               'Sand surfaces',
               'Cut wood',
           ]),
           'answer'       => 'Mark straight reference lines',
           'explanation'  => 'A chalk snap line creates visible, straight layout lines on materials.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Question 11
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 7,
           'question'     => 'Which component in wood framing is used to transfer floor loads to walls?',
           'choices'      => json_encode([
               'Joist',
               'Stud',
               'Rafter',
               'Plate',
           ]),
           'answer'       => 'Joist',
           'explanation'  => 'Joists span between supports and carry floor loads to the wall structure.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Question 12
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 7,
           'question'     => 'What is the term for the horizontal timber at the base of a wall frame?',
           'choices'      => json_encode([
               'Bottom plate',
               'Top plate',
               'Ridge beam',
               'Header',
           ]),
           'answer'       => 'Bottom plate',
           'explanation'  => 'The bottom plate anchors the wall frame to the floor structure.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Question 13
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 7,
           'question'     => 'Which masonry unit is made from fired clay and sand?',
           'choices'      => json_encode([
               'Brick',
               'Concrete block',
               'Stone',
               'Wood',
           ]),
           'answer'       => 'Brick',
           'explanation'  => 'Bricks are manufactured by molding and firing clay-sand mixtures.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Question 14
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 7,
           'question'     => 'What is the purpose of nailing strips (furring) in masonry walls?',
           'choices'      => json_encode([
               'Provide a level surface for finishes',
               'Increase insulation',
               'Channel water away',
               'Anchor footings',
           ]),
           'answer'       => 'Provide a level surface for finishes',
           'explanation'  => 'Furring strips create an even substrate for installing finishes.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Question 15
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 7,
           'question'     => 'Which tool is used to cut masonry units like bricks or blocks?',
           'choices'      => json_encode([
               'Masonry chisel and hammer',
               'Wood chisel',
               'Circular saw',
               'Jigsaw',
           ]),
           'answer'       => 'Masonry chisel and hammer',
           'explanation'  => 'A masonry chisel scored by hammer makes controlled cuts in brick and block.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Question 16
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 7,
           'question'     => 'Which mixture ratio is common for concrete used in footings?',
           'choices'      => json_encode([
               '1:2:3 cement:sand:aggregate',
               '1:1:2 cement:sand:aggregate',
               '1:3:5 cement:sand:aggregate',
               '1:4:4 cement:sand:aggregate',
           ]),
           'answer'       => '1:2:3 cement:sand:aggregate',
           'explanation'  => 'A 1:2:3 mix offers strong, durable concrete for footings and foundations.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Question 17
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 7,
           'question'     => 'What is the purpose of rebar in concrete construction?',
           'choices'      => json_encode([
               'Provide tensile strength',
               'Act as aggregate',
               'Serve as formwork',
               'Enhance finish color',
           ]),
           'answer'       => 'Provide tensile strength',
           'explanation'  => 'Reinforcing bars resist tensile forces that concrete alone cannot handle.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Question 18
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 7,
           'question'     => 'Which trowel shape is best for smoothing large surfaces of mortar?',
           'choices'      => json_encode([
               'Rectangular trowel',
               'Pointed trowel',
               'Margin trowel',
               'Notched trowel',
           ]),
           'answer'       => 'Rectangular trowel',
           'explanation'  => 'Rectangular trowels cover broader areas for smoothing mortar or concrete finishes.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Question 19
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 7,
           'question'     => 'Which masonry component is laid at the top of a wall to distribute loads?',
           'choices'      => json_encode([
               'Coping',
               'Plinth',
               'Soffit',
               'Lintel',
           ]),
           'answer'       => 'Lintel',
           'explanation'  => 'Lintels are horizontal supports placed over openings to carry loads to adjacent masonry.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Question 20
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 7,
           'question'     => 'Which masonry finish provides a rough, textured surface by using a brush or sponge on mortar?',
           'choices'      => json_encode([
               'Bush hammer finish',
               'Smooth finish',
               'Exposed aggregate finish',
               'Broom finish',
           ]),
           'answer'       => 'Broom finish',
           'explanation'  => 'A broom finish uses a stiff broom dragged across mortar for slip-resistant texture.',
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
            $this->command->warn("Part 7 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 7. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 7.");
    }
}
