<?php

namespace Database\Seeders\LET\Majorship\CultureAndArtsEducation;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CultureAndArtsEducationPart2Seeder extends Seeder
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

       // Part 2: Visual Arts Education

       //1
       $batch[] = [
           'subject_id' => 19,
           'part'       => 2,
           'question'   => 'Which of the following is NOT an element of art?',
           'choices'    => json_encode([
               'Rhythm',
               'Color',
               'Line',
               'Shape',
           ]),
           'answer'     => 'Rhythm',
           'explanation'=> 'Rhythm is a principle of design, not an element of art.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //2
       $batch[] = [
           'subject_id' => 19,
           'part'       => 2,
           'question'   => 'What principle of design refers to the distribution of visual weight in an artwork?',
           'choices'    => json_encode([
               'Balance',
               'Unity',
               'Contrast',
               'Emphasis',
           ]),
           'answer'     => 'Balance',
           'explanation'=> 'Balance ensures stability through symmetrical or asymmetrical distribution.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //3
       $batch[] = [
           'subject_id' => 19,
           'part'       => 2,
           'question'   => 'Which medium uses pigment suspended in water mixed with binder, applied on paper?',
           'choices'    => json_encode([
               'Watercolor',
               'Oil paint',
               'Acrylic',
               'Tempera',
           ]),
           'answer'     => 'Watercolor',
           'explanation'=> 'Watercolor uses water-soluble pigments on paper.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //4
       $batch[] = [
           'subject_id' => 19,
           'part'       => 2,
           'question'   => 'In perspective drawing, parallel lines recede to meet at a point called the…',
           'choices'    => json_encode([
               'Vanishing point',
               'Horizon line',
               'Focal point',
               'Center point',
           ]),
           'answer'     => 'Vanishing point',
           'explanation'=> 'Vanishing points define where receding parallel lines converge.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //5
       $batch[] = [
           'subject_id' => 19,
           'part'       => 2,
           'question'   => 'Which Philippine art form features intricate weaving patterns on handloom cloth?',
           'choices'    => json_encode([
               'Inabel',
               'T’nalak',
               'Banig',
               'Piña weaving',
           ]),
           'answer'     => 'Inabel',
           'explanation'=> 'Inabel is a handwoven textile from Ilocos region.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //6
       $batch[] = [
           'subject_id' => 19,
           'part'       => 2,
           'question'   => 'Which tool is used for applying thick paint directly from tube for texture?',
           'choices'    => json_encode([
               'Palette knife',
               'Easel',
               'Brush',
               'Sponge',
           ]),
           'answer'     => 'Palette knife',
           'explanation'=> 'Palette knives spread paint and create impasto textures.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //7
       $batch[] = [
           'subject_id' => 19,
           'part'       => 2,
           'question'   => 'Which color scheme uses colors opposite each other on the color wheel?',
           'choices'    => json_encode([
               'Complementary',
               'Analogous',
               'Monochromatic',
               'Triadic',
           ]),
           'answer'     => 'Complementary',
           'explanation'=> 'Complementary colors enhance contrast and vibrancy.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //8
       $batch[] = [
           'subject_id' => 19,
           'part'       => 2,
           'question'   => 'Which medium is made by mixing pigment with egg yolk as binder?',
           'choices'    => json_encode([
               'Tempera',
               'Fresco',
               'Gouache',
               'Encaustic',
           ]),
           'answer'     => 'Tempera',
           'explanation'=> 'Egg tempera is a permanent, fast-drying painting medium.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //9
       $batch[] = [
           'subject_id' => 19,
           'part'       => 2,
           'question'   => 'Which texture is created by layering transparent color washes over dry paint?',
           'choices'    => json_encode([
               'Glazing',
               'Scumbling',
               'Dry brush',
               'Sgraffito',
           ]),
           'answer'     => 'Glazing',
           'explanation'=> 'Glazing builds depth through multiple translucent layers.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //10
       $batch[] = [
           'subject_id' => 19,
           'part'       => 2,
           'question'   => 'Which Philippine painter is known for social realist works like "The Builders"?',
           'choices'    => json_encode([
               'Carlos "Botong" Francisco',
               'Fernando Amorsolo',
               'Ang Kiukok',
               'Benedicto Cabrera',
           ]),
           'answer'     => 'Carlos "Botong" Francisco',
           'explanation'=> '"Botong" Francisco depicted Filipino culture and social themes in murals and paintings.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //11
       $batch[] = [
           'subject_id' => 19,
           'part'       => 2,
           'question'   => 'Which principle creates a focal point by emphasizing certain elements?',
           'choices'    => json_encode([
               'Emphasis',
               'Rhythm',
               'Unity',
               'Scale',
           ]),
           'answer'     => 'Emphasis',
           'explanation'=> 'Emphasis draws attention to specific parts of the artwork.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //12
       $batch[] = [
           'subject_id' => 19,
           'part'       => 2,
           'question'   => 'Which art technique scratches through a layer to reveal underlying color?',
           'choices'    => json_encode([
               'Sgraffito',
               'Pointillism',
               'Impasto',
               'Collage',
           ]),
           'answer'     => 'Sgraffito',
           'explanation'=> 'Sgraffito is used in ceramics and painting for decorative effects.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //13
       $batch[] = [
           'subject_id' => 19,
           'part'       => 2,
           'question'   => 'Which material is traditionally used for Filipino papier-mâché crafts?',
           'choices'    => json_encode([
               'Tissue and paste',
               'Clay and glaze',
               'Wood shavings',
               'Metal sheets',
           ]),
           'answer'     => 'Tissue and paste',
           'explanation'=> 'Tissue papier-mâché (pabalat) is used for lanterns and festival decorations.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //14
       $batch[] = [
           'subject_id' => 19,
           'part'       => 2,
           'question'   => 'In printmaking, which process uses acid to etch design into metal plate?',
           'choices'    => json_encode([
               'Etching',
               'Lithography',
               'Screen printing',
               'Woodcut',
           ]),
           'answer'     => 'Etching',
           'explanation'=> 'Etching uses acid baths to bite lines into a metal surface for printing.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //15
       $batch[] = [
           'subject_id' => 19,
           'part'       => 2,
           'question'   => 'Which concept refers to the lightness or darkness of a color?',
           'choices'    => json_encode([
               'Value',
               'Hue',
               'Saturation',
               'Temperature',
           ]),
           'answer'     => 'Value',
           'explanation'=> 'Value indicates the tonal contrast of a color.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //16
       $batch[] = [
           'subject_id' => 19,
           'part'       => 2,
           'question'   => 'Which Filipino sculptor created the iconic “The Threshermen”?',
           'choices'    => json_encode([
               'Guillermo Tolentino',
               'Napoleon Abueva',
               'Jose Honorato Lozano',
               'Michael Cacnio',
           ]),
           'answer'     => 'Napoleon Abueva',
           'explanation'=> 'Abueva is known as the Father of Modern Philippine Sculpture.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //17
       $batch[] = [
           'subject_id' => 19,
           'part'       => 2,
           'question'   => 'Which process involves combining various materials onto a single surface?',
           'choices'    => json_encode([
               'Collage',
               'Stencil',
               'Relief',
               'Mosaic',
           ]),
           'answer'     => 'Collage',
           'explanation'=> 'Collage uses cut or torn pieces of paper and other media.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //18
       $batch[] = [
           'subject_id' => 19,
           'part'       => 2,
           'question'   => 'What term describes the actual surface texture of an artwork?',
           'choices'    => json_encode([
               'Tactile texture',
               'Visual texture',
               'Pattern',
               'Form',
           ]),
           'answer'     => 'Tactile texture',
           'explanation'=> 'Tactile texture can be felt, unlike visual texture which is implied.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //19
       $batch[] = [
           'subject_id' => 19,
           'part'       => 2,
           'question'   => 'Which art tool is essential for shading and blending pencil drawings?',
           'choices'    => json_encode([
               'Tortillon (blending stump)',
               'Charcoal stick',
               'Palette knife',
               'Water brush',
           ]),
           'answer'     => 'Tortillon (blending stump)',
           'explanation'=> 'A tortillon smooths graphite to create gradients and soft shadows.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //20
       $batch[] = [
           'subject_id' => 19,
           'part'       => 2,
           'question'   => 'Which principle of design unifies all elements to create a cohesive composition?',
           'choices'    => json_encode([
               'Unity',
               'Proportion',
               'Movement',
               'Contrast',
           ]),
           'answer'     => 'Unity',
           'explanation'=> 'Unity makes all parts of an artwork look and feel together.',
           'created_at' => $now,
           'updated_at' => $now,
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
