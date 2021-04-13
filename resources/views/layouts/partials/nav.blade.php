<div class="c-sidebar c-sidebar-dark c-sidebar-fixed c-sidebar-lg-show" id="sidebar">

    <div class="c-sidebar-brand">
        <img class="c-sidebar-brand-full" src="{{ asset('assets/brand/coreui-pro-base-white.svg') }}" width="118"
             height="46" alt="CoreUI Logo">
        <img class="c-sidebar-brand-minimized" src="{{ asset('assets/brand/coreui-signet-white.svg') }}" width="118"
             height="46" alt="CoreUI Logo">
    </div>

    <ul class="c-sidebar-nav" data-drodpown-accordion="true">

        <x-sidebar-nav-link icon="cil-speedometer" url="{{ route('home') }}">
            Dashboard<span class="badge badge-info">NEW</span>
        </x-sidebar-nav-link>

        @can('researches_access')
            <x-sidebar-nav-link icon="cil-color-fill" url="{{ route('backend.researches.index') }}">
                Penelitian
            </x-sidebar-nav-link>
        @endcan

        @can('community_services_access')
            <x-sidebar-nav-link icon="cil-car-alt" url="{{ route('backend.communityservices.index') }}">
                Pengabdian
            </x-sidebar-nav-link>
        @endcan

        @can('theses_access')
            <x-sidebar-nav-dropdown icon="cil-school" label="Kelola TA">

                <x-sidebar-nav-link url="{{ route('backend.theses.index') }}">
                    List TA
                </x-sidebar-nav-link>

                <x-sidebar-nav-link url="{{ route('backend.thesis.seminar-submissions.index') }}">
                    Seminar Hasil
                </x-sidebar-nav-link>

                <x-sidebar-nav-link url="{{ route('backend.thesis.trial-submissions.index') }}">
                    Sidang TA
                </x-sidebar-nav-link>

                <x-sidebar-nav-link url="{{ route('backend.thesis-topics.index') }}">
                    Topik TA
                </x-sidebar-nav-link>

            </x-sidebar-nav-dropdown>
        @endcan

        @can('theses_control')
            <x-sidebar-nav-dropdown icon="cil-school" label="Manajemen TA">

                <x-sidebar-nav-link url="{{ route('frontend.thesis.seminar-submissions.index') }}">
                    Seminar Hasil TA
                </x-sidebar-nav-link>

                <x-sidebar-nav-link url="{{ route('frontend.thesis.trial-submissions.index') }}">
                    Sidang TA
                </x-sidebar-nav-link>

                <x-sidebar-nav-link url="{{ route('frontend.thesis.finals.index') }}">
                    Nilai TA
                </x-sidebar-nav-link>

            </x-sidebar-nav-dropdown>
        @endcan

        @can('thesis_do')
            <x-sidebar-nav-link icon="cil-school" url="{{ route('frontend.theses.index') }}">
                Tugas Akhir
            </x-sidebar-nav-link>
        @endcan

        @can('thesis_supervise')
            <x-sidebar-nav-dropdown icon="cil-school" label="Tugas Akhir">

                <x-sidebar-nav-link url="{{ route('frontend.thesis.advisors.index') }}">
                    List Bimbingan TA
                </x-sidebar-nav-link>

                <x-sidebar-nav-link url="{{ route('frontend.thesis.submissions.index') }}">
                    Pengajuan Pembimbing
                </x-sidebar-nav-link>

                <x-sidebar-nav-link url="{{ route('frontend.thesis.proposal-grades.index') }}">
                    Penilaian Proposal
                </x-sidebar-nav-link>

                <x-sidebar-nav-link url="{{ route('frontend.thesis.reviewer-submissions.index') }}">
                    Reviewer/Penguji
                </x-sidebar-nav-link>

                <x-sidebar-nav-link url="{{ route('frontend.thesis.grades.index') }}">
                    Penilaian Akhir
                </x-sidebar-nav-link>

            </x-sidebar-nav-dropdown>

        @endcan

        @canany(['students_manage','lecturers_manage','staffs_manage','departments_manage','roles_manage'])

            <li class="c-sidebar-nav-title">Master</li>

            @canany(['students_manage','lecturers_manage','staffs_manage'])
                <x-sidebar-nav-dropdown icon="cil-user" label="Sivitas">
                    @can('students_manage')
                        <x-sidebar-nav-link url="{{ route('backend.students.index') }}">
                            Mahasiswa
                        </x-sidebar-nav-link>
                    @endcan

                    @can('lecturers_manage')
                        <x-sidebar-nav-link url="{{ route('backend.lecturers.index') }}">
                            Dosen
                        </x-sidebar-nav-link>
                    @endcan

                    @can('staffs_manage')
                        <x-sidebar-nav-link url="{{ route('backend.staffs.index') }}">
                            Tendik
                        </x-sidebar-nav-link>
                    @endcan

                </x-sidebar-nav-dropdown>
            @endcanany

            @can('roles_manage')
                <x-sidebar-nav-link icon="cil-user-follow" url="{{ route('backend.roles.index') }}">
                    Role Permission
                </x-sidebar-nav-link>
            @endcan

            @can('departments_manage')
                <x-sidebar-nav-link icon="cil-bank" url="{{ route('backend.departments.index') }}">
                    Prodi
                </x-sidebar-nav-link>
            @endcan

            @can('rooms_access')
                <x-sidebar-nav-link icon="cil-building" url="{{ route('backend.rooms.index') }}">
                    Ruangan
                </x-sidebar-nav-link>
            @endcan

        @endcanany

    </ul>
    <button class="c-sidebar-minimizer c-class-toggler"
            type="button"
            data-target="_parent"
            data-class="c-sidebar-unfoldable"></button>
</div>
