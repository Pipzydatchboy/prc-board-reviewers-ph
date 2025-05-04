<?php

namespace Database\Seeders\LET\Majorship\PhysicalScience;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PhysicalSciencePart7Seeder extends Seeder
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

       // 121
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 7,
           'question'    => "What is the relationship between wave speed (v), frequency (f), and wavelength (λ)?",
           'choices'     => json_encode([
               'v = f × λ',
               'v = f / λ',
               'v = λ / f',
               'v = f + λ',
           ]),
           'answer'      => 'v = f × λ',
           'explanation' => 'Wave speed equals frequency multiplied by wavelength.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 122
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 7,
           'question'    => "Which phenomenon occurs when a wave passes into a medium where its speed changes?",
           'choices'     => json_encode([
               'Refraction',
               'Reflection',
               'Diffraction',
               'Interference',
           ]),
           'answer'      => 'Refraction',
           'explanation' => 'Refraction is the bending of a wave as it enters a new medium and changes speed.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 123
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 7,
           'question'    => "According to Snell's law, n₁ sinθ₁ = n₂ sinθ₂, what does n represent?",
           'choices'     => json_encode([
               'Refractive index',
               'Frequency',
               'Wavelength',
               'Amplitude',
           ]),
           'answer'      => 'Refractive index',
           'explanation' => 'n is the refractive index of each medium in Snell’s law.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 124
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 7,
           'question'    => "What condition leads to total internal reflection at a boundary?",
           'choices'     => json_encode([
               'Incidence angle > critical angle for n₁ > n₂',
               'Incidence angle < critical angle for n₁ > n₂',
               'Incidence angle = 0',
               'When mediums have same n',
           ]),
           'answer'      => 'Incidence angle > critical angle for n₁ > n₂',
           'explanation' => 'Total internal reflection occurs when entering lower-index medium at angles above critical.',
           'created_at'  => $now,
           'updated_at'  => $now
       ];
       
       // 125
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 7,
           'question'    => "Which mirror always produces a virtual, upright, and reduced image?",
           'choices'     => json_encode([
               'Convex mirror',
               'Concave mirror',
               'Plane mirror',
               'Parabolic mirror',
           ]),
           'answer'      => 'Convex mirror',
           'explanation' => 'Convex mirrors diverge light, forming virtual, upright, smaller images.',
           'created_at'  => $now,
           'updated_at'  => $now
       ];
       
       // 126
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 7,
           'question'    => "In Young's double-slit experiment, bright fringes occur where path difference equals?",
           'choices'     => json_encode([
               'mλ (m integer)',
               '(m+½)λ',
               'λ/2',
               '2λ',
           ]),
           'answer'      => 'mλ (m integer)',
           'explanation' => 'Constructive interference (bright) occurs when path difference is an integer multiple of wavelength.',
           'created_at'  => $now,
           'updated_at'  => $now
       ];
       
       // 127
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 7,
           'question'    => "What phenomenon is demonstrated by light bending around obstacles?",
           'choices'     => json_encode([
               'Diffraction',
               'Refraction',
               'Dispersion',
               'Reflection',
           ]),
           'answer'      => 'Diffraction',
           'explanation' => 'Diffraction is the spreading of waves when they encounter an obstacle or aperture.',
           'created_at'  => $now,
           'updated_at'  => $now
       ];
       
       // 128
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 7,
           'question'    => "Which effect shows polarization of light?",
           'choices'     => json_encode([
               'Polarizing filters',
               'Prism dispersion',
               'Lens focusing',
               'Double refraction',
           ]),
           'answer'      => 'Polarizing filters',
           'explanation' => 'Polarizing filters transmit only one polarization direction, demonstrating polarization.',
           'created_at'  => $now,
           'updated_at'  => $now
       ];
       
       // 129
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 7,
           'question'    => "What is the energy of a photon with frequency f?",
           'choices'     => json_encode([
               'E = h f',
               'E = h / f',
               'E = f / h',
               'E = h f²',
           ]),
           'answer'      => 'E = h f',
           'explanation' => 'Photon energy is Planck’s constant times frequency.',
           'created_at'  => $now,
           'updated_at'  => $now
       ];
       
       // 130
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 7,
           'question'    => "Which experiment confirmed the quantization of energy levels in atoms?",
           'choices'     => json_encode([
               'Franck-Hertz experiment',
               'Millikan oil drop',
               'Rutherford scattering',
               'Michelson-Morley',
           ]),
           'answer'      => 'Franck-Hertz experiment',
           'explanation' => 'The Franck-Hertz experiment showed discrete energy absorption by electrons.',
           'created_at'  => $now,
           'updated_at'  => $now
       ];
       
       // 131
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 7,
           'question'    => "What is the de Broglie wavelength of a particle?",
           'choices'     => json_encode([
               'λ = h/p',
               'λ = p/h',
               'λ = h f',
               'λ = f/h',
           ]),
           'answer'      => 'λ = h/p',
           'explanation' => 'De Broglie relation relates wavelength to Planck’s constant divided by momentum.',
           'created_at'  => $now,
           'updated_at'  => $now
       ];
       
       // 132
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 7,
           'question'    => "Which phenomenon demonstrates wave-particle duality?",
           'choices'     => json_encode([
               'Electron diffraction',
               'Photoelectric effect',
               'Both A and B',
               'None of the above',
           ]),
           'answer'      => 'Both A and B',
           'explanation' => 'Electron diffraction shows wave nature; photoelectric effect shows particle nature.',
           'created_at'  => $now,
           'updated_at'  => $now
       ];
       
       // 133
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 7,
           'question'    => "In the photoelectric effect, increasing light frequency above threshold does what to ejected electrons?",
           'choices'     => json_encode([
               'Increases their kinetic energy',
               'Increases number of electrons only',
               'Decreases kinetic energy',
               'No effect',
           ]),
           'answer'      => 'Increases their kinetic energy',
           'explanation' => 'Higher frequency photons impart more energy, increasing electron KE.',
           'created_at'  => $now,
           'updated_at'  => $now
       ];
       
       // 134
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 7,
           'question'    => "What is Planck's constant (h) approximately?",
           'choices'     => json_encode([
               '6.63×10⁻³⁴ J·s',
               '3.00×10⁸ m/s',
               '1.60×10⁻¹⁹ C',
               '9.11×10⁻³¹ kg',
           ]),
           'answer'      => '6.63×10⁻³⁴ J·s',
           'explanation' => 'Planck constant relates photon energy and frequency.',
           'created_at'  => $now,
           'updated_at'  => $now
       ];
       
       // 135
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 7,
           'question'    => "Which law relates blackbody radiation spectrum to temperature?",
           'choices'     => json_encode([
               'Wien’s displacement law',
               'Boyle’s law',
               'Ohm’s law',
               'Kepler’s law',
           ]),
           'answer'      => 'Wien’s displacement law',
           'explanation' => 'Wien’s law shows peak wavelength inversely proportional to temperature.',
           'created_at'  => $now,
           'updated_at'  => $now
       ];
       
       // 136
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 7,
           'question'    => "The energy levels in Bohr’s hydrogen atom are quantized as: ",
           'choices'     => json_encode([
               'E_n ∝ -1/n²',
               'E_n ∝ -n',
               'E_n ∝ n²',
               'E_n ∝ 1/n',
           ]),
           'answer'      => 'E_n ∝ -1/n²',
           'explanation' => 'Bohr model gives energy levels inversely proportional to the square of principal quantum number.',
           'created_at'  => $now,
           'updated_at'  => $now
       ];
       
       // 137
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 7,
           'question'    => "What is the main contribution of Michelson-Morley experiment?",
           'choices'     => json_encode([
               'Disproving luminiferous aether',
               'Discovering electron',
               'Measuring Planck’s constant',
               'Determining speed of light',
           ]),
           'answer'      => 'Disproving luminiferous aether',
           'explanation' => 'The null result contradicted aether theories, leading to relativity.',
           'created_at'  => $now,
           'updated_at'  => $now
       ];
       
       // 138
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 7,
           'question'    => "Einstein’s mass-energy equivalence is expressed as: ",
           'choices'     => json_encode([
               'E = mc²',
               'E = mgh',
               'E = ½mv²',
               'E = hf',
           ]),
           'answer'      => 'E = mc²',
           'explanation' => 'Mass and energy are equivalent via the speed of light squared.',
           'created_at'  => $now,
           'updated_at'  => $now
       ];
       
       // 139
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 7,
           'question'    => "Which particle is emitted in beta-minus decay?",
           'choices'     => json_encode([
               'Electron',
               'Positron',
               'Alpha particle',
               'Neutron',
           ]),
           'answer'      => 'Electron',
           'explanation' => 'Beta-minus decay emits an electron and an antineutrino.',
           'created_at'  => $now,
           'updated_at'  => $now
       ];
       
       // 140
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 7,
           'question'    => "What is the half-life of a radioactive substance?",
           'choices'     => json_encode([
               'Time for half of nuclei to decay',
               'Time for all nuclei to decay',
               'Time for doubling activity',
               'Time between decays',
           ]),
           'answer'      => 'Time for half of nuclei to decay',
           'explanation' => 'Half-life is the period in which half the radioactive atoms decay.',
           'created_at'  => $now,
           'updated_at'  => $now
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
