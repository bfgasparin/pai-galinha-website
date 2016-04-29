@extends('layouts.app')

@section('content')
	<pg-advice v-if="{{ $advice }}" :advice="{{ $advice }}" background-img="http://lorempixel.com/1900/920"></pg-advice>

    <pg-section title="Teste" id="teste-id">
        <pg-news class="col s12 m4" link="/test" icon="today" title="My title" description="Some Description" hoverable></pg-news>
        <pg-news class="col s12 m4" link="/test" icon="question_answer" title="Other title" description="Other Description"></pg-news>
        <pg-news class="col s12 m4" link="/test" icon="spellcheck" title="Some other title" description="Some other Description" hoverable></pg-news>
    </pg-section>      

    <pg-section title="Teste 2" id="teste2-id" stared stared-config="build/config/particles.json">
        <pg-news link="/test" icon="today" title="New Title" description="New Description" hoverable></pg-news>
    </pg-section>
@endsection