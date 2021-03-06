<?php namespace MXTranslator\Events;

class ScormStatusSubmitted extends ScormEvent {
    /**
     * Reads data for an event.
     * @param [String => Mixed] $opts
     * @return [String => Mixed]
     * @override ModuleViewed
     */
    public function read(array $opts) {
        return [array_merge(parent::read($opts)[0], [
            'recipe' => 'scorm_status_submitted',
        ])];
    }
}
