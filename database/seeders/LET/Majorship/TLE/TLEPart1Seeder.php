<?php

namespace Database\Seeders\LET\Majorship\TLE;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class TLEPart1Seeder extends Seeder
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

       // Part 1 – Basic Drafting – Question 1
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 1,
           'question'     => 'What is the primary function of an architectural T-square in manual drafting?',
           'choices'      => json_encode([
               'Drawing horizontal lines',
               'Measuring angles',
               'Creating template curves',
               'Cutting paper',
           ]),
           'answer'       => 'Drawing horizontal lines',
           'explanation'  => 'A T-square serves as a guide for drawing consistent horizontal lines on the drawing board.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 1 – Basic Drafting – Question 2
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 1,
           'question'     => 'Which drafting tool is used to draw parallel lines at a consistent spacing?',
           'choices'      => json_encode([
               'Divider',
               'Compass',
               'Drafting machine',
               'French curve',
           ]),
           'answer'       => 'Drafting machine',
           'explanation'  => 'A drafting machine integrates scales and protractors to draw parallel and angled lines accurately.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 1 – Basic Drafting – Question 3
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 1,
           'question'     => 'What is the standard line weight for object outlines in architectural drawings?',
           'choices'      => json_encode([
               '0.5 mm',
               '0.7 mm',
               '0.3 mm',
               '1.0 mm',
           ]),
           'answer'       => '0.7 mm',
           'explanation'  => 'A 0.7 mm pen is typically used for main object outlines to ensure clarity and emphasis.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 1 – Basic Drafting – Question 4
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 1,
           'question'     => 'Which paper size is commonly used for detailed architectural floor plans?',
           'choices'      => json_encode([
               'A4',
               'A1',
               'A3',
               'B4',
           ]),
           'answer'       => 'A1',
           'explanation'  => 'A1 paper (594×841 mm) provides sufficient space for detailed floor plans and annotations.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 1 – Basic Drafting – Question 5
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 1,
           'question'     => 'What drawing scale indicates the ratio of 1:50?',
           'choices'      => json_encode([
               '1 mm = 50 mm',
               '1 mm = 5 mm',
               '1 cm = 50 cm',
               '1 m = 50 m',
           ]),
           'answer'       => '1 mm = 50 mm',
           'explanation'  => 'A 1:50 scale means 1 mm on paper represents 50 mm (5 cm) in reality.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 1 – Basic Drafting – Question 6
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 1,
           'question'     => 'Which instrument is best for drawing smooth, noncircular curves in technical sketches?',
           'choices'      => json_encode([
               'French curve',
               'Compass',
               'Straightedge',
               'Beam compass',
           ]),
           'answer'       => 'French curve',
           'explanation'  => 'French curves are templates used to draw complex, smooth curves that cannot be produced by compasses.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 1 – Basic Drafting – Question 7
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 1,
           'question'     => 'What type of drawing shows multiple views (top, front, side) of a single object?',
           'choices'      => json_encode([
               'Isometric drawing',
               'Orthographic projection',
               'Perspective sketch',
               'Exploded view',
           ]),
           'answer'       => 'Orthographic projection',
           'explanation'  => 'Orthographic projection presents multiple 2D views of an object for accurate dimensioning.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 1 – Basic Drafting – Question 8
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 1,
           'question'     => 'Which drawing type depicts objects in 3D with parallel projection lines?',
           'choices'      => json_encode([
               'Isometric drawing',
               'Perspective drawing',
               'Elevation',
               'Section drawing',
           ]),
           'answer'       => 'Isometric drawing',
           'explanation'  => 'Isometric drawings use equal foreshortening on all axes to represent 3D objects.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 1 – Basic Drafting – Question 9
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 1,
           'question'     => 'Which line type indicates a centerline on a mechanical drawing?',
           'choices'      => json_encode([
               'Chain thin line',
               'Continuous thick line',
               'Dashed thin line',
               'Dash-dot-dash thin line',
           ]),
           'answer'       => 'Dash-dot-dash thin line',
           'explanation'  => 'Centerlines are conventionally drawn as alternating long and short dashes with thin pen weight.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 1 – Basic Drafting – Question 10
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 1,
           'question'     => 'Which view shows a cross-section of a building or object along an imaginary cutting plane?',
           'choices'      => json_encode([
               'Plan view',
               'Elevation',
               'Section view',
               'Detail view',
           ]),
           'answer'       => 'Section view',
           'explanation'  => 'Section views illustrate internal features by cutting through the object or structure.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 1 – Basic Drafting – Question 11
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 1,
           'question'     => 'What term describes the space around the drawing on which title blocks and revision data appear?',
           'choices'      => json_encode([
               'Border',
               'Margin',
               'Frame',
               'Bleed area',
           ]),
           'answer'       => 'Margin',
           'explanation'  => 'Margins define the printable area and contain important metadata about the drawing.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 1 – Basic Drafting – Question 12
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 1,
           'question'     => 'Which symbol is used to indicate a section cut line in architectural plans?',
           'choices'      => json_encode([
               'Arrow with letters',
               'Dashed circle',
               'Crosshair',
               'Solid triangle',
           ]),
           'answer'       => 'Arrow with letters',
           'explanation'  => 'Section cuts are marked by arrows and labels (e.g., A-A) to show the cut direction and reference.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 1 – Basic Drafting – Question 13
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 1,
           'question'     => 'What does a scale bar represent on a technical drawing?',
           'choices'      => json_encode([
               'Graphical ratio of drawing vs real size',
               'Thickness of lines',
               'Paper border width',
               'Number of copies',
           ]),
           'answer'       => 'Graphical ratio of drawing vs real size',
           'explanation'  => 'A scale bar visually shows the proportional relationship between drawing lengths and actual dimensions.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 1 – Basic Drafting – Question 14
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 1,
           'question'     => 'Which dimensioning style places dimensions outside the object outline with extension lines?',
           'choices'      => json_encode([
               'Aligned dimensioning',
               'Unidirectional dimensioning',
               'Chain dimensioning',
               'Baseline dimensioning',
           ]),
           'answer'       => 'Aligned dimensioning',
           'explanation'  => 'Aligned dimensions follow the orientation of dimension lines and are placed parallel to them.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 1 – Basic Drafting – Question 15
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 1,
           'question'     => 'Which drafting medium replaced traditional pencil sketches for production drawings?',
           'choices'      => json_encode([
               'Blueprints',
               'Ink on mylar',
               'Charcoal on paper',
               'Digital printouts',
           ]),
           'answer'       => 'Ink on mylar',
           'explanation'  => 'Ink on mylar became standard for durability and clarity in official production drawings.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 1 – Basic Drafting – Question 16
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 1,
           'question'     => 'What is the primary advantage of using CAD over manual drafting?',
           'choices'      => json_encode([
               'Faster revisions and precision',
               'No need for instruments',
               'Better hand skills',
               'Lower software cost',
           ]),
           'answer'       => 'Faster revisions and precision',
           'explanation'  => 'CAD allows quick edits and high accuracy, increasing productivity and reducing errors.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 1 – Basic Drafting – Question 17
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 1,
           'question'     => 'Which layer management feature in CAD helps organize drawing components?',
           'choices'      => json_encode([
               'Layers',
               'Hatches',
               'Blocks',
               'Leaders',
           ]),
           'answer'       => 'Layers',
           'explanation'  => 'CAD layers segregate elements (e.g., walls, dimensions) simplifying visibility and editing.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 1 – Basic Drafting – Question 18
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 1,
           'question'     => 'Which tool in CAD replicates objects multiple times in a pattern?',
           'choices'      => json_encode([
               'Copy',
               'Array',
               'Mirror',
               'Scale',
           ]),
           'answer'       => 'Array',
           'explanation'  => 'The array command clones objects in rectangular or polar arrangements, useful for repetitive elements.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 1 – Basic Drafting – Question 19
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 1,
           'question'     => 'Which file format is commonly used to exchange CAD drawings between different software?',
           'choices'      => json_encode([
               'DWG',
               'JPEG',
               'PDF',
               'MP4',
           ]),
           'answer'       => 'DWG',
           'explanation'  => 'DWG is a native CAD file format widely supported for exchanging drawing data.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 1 – Basic Drafting – Question 20
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 1,
           'question'     => 'What is the function of the lineweight feature in CAD drafting?',
           'choices'      => json_encode([
               'Vary line thickness for hierarchy',
               'Change background color',
               'Set layer transparency',
               'Export 3D models',
           ]),
           'answer'       => 'Vary line thickness for hierarchy',
           'explanation'  => 'Lineweights differentiate components by visual prominence, guiding the viewer’s focus.',
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
