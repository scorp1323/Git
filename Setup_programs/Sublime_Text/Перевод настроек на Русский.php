// Place your settings in the file "Packages/User/Preferences.sublime-settings",
// which overrides the settings in here.
//
// Settings may also be placed in syntax-specific setting files, for
// example, in Packages/User/Python.sublime-settings for python files.
{
    // Sets the colors used within the text area
    "color_scheme": "Monokai.sublime-color-scheme",

    // Note that the font_face and font_size are overridden in the platform
    // specific settings file, for example, "Preferences (Linux).sublime-settings".
    // Because of this, setting them here will have no effect: you must set them
    // in your User File Preferences.
    "font_face": "",
    "font_size": 10,

    // Valid options on all platforms are:
    //  - "no_bold": Disables bold text
    //  - "no_italic": Disables italic text
    // Antialiasing options:
    //  - "no_antialias": Disables antialiasing
    //  - "gray_antialias": Uses grayscale antialiasing instead of subpixel
    // Ligature options:
    //  - "no_liga": Disables standard ligatures (OpenType liga feature)
    //  - "no_clig": Disables contextual ligatures (OpenType clig feature)
    //  - "no_calt": Disables contextual alternatives (OpenType calt feature)
    //  - "dlig": Enables discretionary ligatures (OpenType dlig feature)
    //  - "ss01": Enables OpenType stylistic set 1. Can enable sets 1 to 10
    //        by changing the last two digits.
    // Windows-only options:
    //  - "directwrite": (default) Use DirectWrite for font rendering
    //  - "gdi": Use GDI for font rendering
    //  - "dwrite_cleartype_classic": Only applicable to "directwrite" mode,
    //        should render fonts similar to traditional GDI
    //  - "dwrite_cleartype_natural": Only applicable to "directwrite" mode,
    //        should render fonts similar to ClearType "natural quality" GDI
    //  - "subpixel_antialias": Force ClearType antialiasing when disabled
    //        at system level
    // Mac-only options:
    //  - "no_round": Don't round glyph widths for monospace fonts when
    //        "font_size" is small.
    "font_options": [],
    // Font options for theme text. Valid options are the same as
    // "font_options", except "no_bold" and "no_italic" are not supported
    "theme_font_options": [],

    // Characters that are considered to separate words
    "word_separators": "./\\()\"'-:,.;<>~!@#$%^&*|+=[]{}`~?",

    // Set to false to prevent line numbers being drawn in the gutter
    "line_numbers": true,

    // Set to false to hide the gutter altogether
    "gutter": true,

    // Spacing between the gutter and the text
    "margin": 4,

    // Fold buttons are the triangles shown in the gutter to fold regions of text
    "fold_buttons": true,

    // Hides the fold buttons unless the mouse is over the gutter
    "fade_fold_buttons": true,

    // Indicate modified lines in the gutter
    // - true: Enables modified line indicators on all files
    // - "auto": Enables modified line indicators on tracked files within Git
    // - false: Disables modified line indicators
    "mini_diff": true,

    // Columns in which to display vertical rulers
    "rulers": [],

    // Set to true to turn spell checking on by default
    "spell_check": false,

    // The number of spaces a tab is considered equal to
    "tab_size": 4,

    // Set to true to insert spaces when tab is pressed
    "translate_tabs_to_spaces": false,

    // If translate_tabs_to_spaces is true, use_tab_stops will make tab and
    // backspace insert/delete up to the next tabstop
    "use_tab_stops": true,

    // Set to false to disable detection of tabs vs. spaces on load
    "detect_indentation": true,

    // Calculates indentation automatically when pressing enter
    "auto_indent": true,

    // Makes auto indent a little smarter, e.g., by indenting the next line
    // after an if statement in C. Requires auto_indent to be enabled.
    "smart_indent": true,

    // Adds whitespace up to the first open bracket when indenting. Requires
    // auto_indent to be enabled.
    "indent_to_bracket": false,

    // Trims white space added by auto_indent when moving the caret off the
    // line.
    "trim_automatic_white_space": true,

    // Disables horizontal scrolling if enabled.
    // May be set to true, false, or "auto", where it will be disabled for
    // source code, and otherwise enabled.
    "word_wrap": "auto",

    // Set to a value other than 0 to force wrapping at that column rather than the
    // window width
    "wrap_width": 0,

    // Set to false to prevent word wrapped lines from being indented to the same
    // level
    "indent_subsequent_lines": true,

    // Draws text centered in the window rather than left aligned
    "draw_centered": false,

    // Controls auto pairing of quotes, brackets etc
    "auto_match_enabled": true,

    // Word list to use for spell checking
    "dictionary": "Packages/Language - English/en_US.dic",

    // Sets which scopes are checked for spelling errors
    "spelling_selector": "markup.raw, source string.quoted - punctuation - meta.preprocessor.include, source comment - source comment.block.preprocessor, -(source, constant, keyword, storage, support, variable, markup.underline.link, meta.tag)",

    // Set to true to draw a border around the visible rectangle on the minimap.
    // The color of the border will be determined by the "minimapBorder" key in
    // the color scheme
    "draw_minimap_border": false,

    // Always visualise the viewport on the minimap, as opposed to only
    // showing it on mouse over
    "always_show_minimap_viewport": false,

    // If enabled, will highlight any line with a caret
    "highlight_line": false,

    // Valid values are "smooth", "phase", "blink" and "solid".
    "caret_style": "smooth",

    // These settings control the size of the caret
    "caret_extra_top": 2,
    "caret_extra_bottom": 2,
    "caret_extra_width": 1,

    // When enabled, the caret will be drawn as a rectangle, using the width
    // of the current character
    "block_caret": false,

    // Set to false to disable underlining the brackets surrounding the caret
    "match_brackets": true,

    // Set to false if you'd rather only highlight the brackets when the caret is
    // next to one
    "match_brackets_content": true,

    // Set to false to not highlight square brackets. This only takes effect if
    // match_brackets is true
    "match_brackets_square": true,

    // Set to false to not highlight curly brackets. This only takes effect if
    // match_brackets is true
    "match_brackets_braces": true,

    // Set to false to not highlight angle brackets. This only takes effect if
    // match_brackets is true
    "match_brackets_angle": false,

    // Enable visualization of the matching tag in HTML and XML
    "match_tags": true,

    // Highlights other occurrences of the currently selected text
    "match_selection": true,

    // Additional spacing at the top of each line, in pixels
    "line_padding_top": 0,

    // Additional spacing at the bottom of each line, in pixels
    "line_padding_bottom": 0,

    // Set to false to disable scrolling past the end of the buffer.
    // On Mac, this value is overridden in the platform specific settings, so
    // you'll need to place this line in your user settings to override it.
    "scroll_past_end": true,

    // This controls what happens when pressing up or down when on the first
    // or last line.
    // On Mac, this value is overridden in the platform specific settings, so
    // you'll need to place this line in your user settings to override it.
    "move_to_limit_on_up_down": false,

    // Set to "none" to turn off drawing white space, "selection" to draw only the
    // white space within the selection, and "all" to draw all white space
    "draw_white_space": "selection",

    // Set to false to turn off the indentation guides.
    // The color and width of the indent guides may be customized by editing
    // the corresponding .tmTheme file, and specifying the colors "guide",
    // "activeGuide" and "stackGuide"
    "draw_indent_guides": true,

    // Controls how the indent guides are drawn, valid options are
    // "draw_normal" and "draw_active". draw_active will draw the indent
    // guides containing the caret in a different color.
    "indent_guide_options": ["draw_normal"],

    // Set to true to removing trailing white space on save
    "trim_trailing_white_space_on_save": false,

    // Set to true to ensure the last line of the file ends in a newline
    // character when saving
    "ensure_newline_at_eof_on_save": false,

    // Set to true to automatically save files when switching to a different file
    // or application
    "save_on_focus_lost": false,

    // Save via writing to an alternate file, and then renaming it over the
    // original file.
    "atomic_save": false,

    // The encoding to use when the encoding can't be determined automatically.
    // ASCII, UTF-8 and UTF-16 encodings will be automatically detected.
    "fallback_encoding": "Western (Windows 1252)",

    // Encoding used when saving new files, and files opened with an undefined
    // encoding (e.g., plain ascii files). If a file is opened with a specific
    // encoding (either detected or given explicitly), this setting will be
    // ignored, and the file will be saved with the encoding it was opened
    // with.
    "default_encoding": "UTF-8",

    // Files containing null bytes are opened as hexadecimal by default
    "enable_hexadecimal_encoding": true,

    // Determines what character(s) are used to terminate each line in new files.
    // Valid values are 'system' (whatever the OS uses), 'windows' (CRLF) and
    // 'unix' (LF only).
    "default_line_ending": "system",

    // When enabled, hovering over a word will show a popup listing all
    // possible locations for the definition symbol. Requires index_files.
    "show_definitions": true,

    // When enabled, pressing tab will insert the best matching completion.
    // When disabled, tab will only trigger snippets or insert a tab.
    // Shift+tab can be used to insert an explicit tab when tab_completion is
    // enabled.
    "tab_completion": true,

    // Enable auto complete to be triggered automatically when typing.
    "auto_complete": true,

    // The maximum file size where auto complete will be automatically triggered.
    "auto_complete_size_limit": 4194304,

    // The delay, in ms, before the auto complete window is shown after typing
    "auto_complete_delay": 50,

    // Controls what scopes auto complete will be triggered in
    "auto_complete_selector": "meta.tag - punctuation.definition.tag.begin, source - comment - string.quoted.double.block - string.quoted.single.block - string.unquoted.heredoc",

    // Additional situations to trigger auto complete
    "auto_complete_triggers": [ {"selector": "text.html", "characters": "<"} ],

    // By default, auto complete will commit the current completion on enter.
    // This setting can be used to make it complete on tab instead.
    // Completing on tab is generally a superior option, as it removes
    // ambiguity between committing the completion and inserting a newline.
    "auto_complete_commit_on_tab": false,

    // Controls if auto complete is shown when snippet fields are active.
    // Only relevant if auto_complete_commit_on_tab is true.
    "auto_complete_with_fields": false,

    // Controls what happens when pressing the up key while the first item in
    // the auto complete window is selected: if false, the window is hidden,
    // otherwise the last item in the window is selected. Likewise for the
    // down key when the last item is selected.
    "auto_complete_cycle": false,

    // Automatically close HTML and XML tags when </ is entered.
    "auto_close_tags": true,

    // By default, shift+tab will only unindent if the selection spans
    // multiple lines. When pressing shift+tab at other times, it'll insert a
    // tab character - this allows tabs to be inserted when tab_completion is
    // enabled. Set this to true to make shift+tab always unindent, instead of
    // inserting tabs.
    "shift_tab_unindent": false,

    // If true, the copy and cut commands will operate on the current line
    // when the selection is empty, rather than doing nothing.
    "copy_with_empty_selection": true,

    // If true, the selected text will be copied into the find panel when it's
    // shown.
    // On Mac, this value is overridden in the platform specific settings, so
    // you'll need to place this line in your user settings to override it.
    "find_selected_text": true,

    // When auto_find_in_selection is enabled, the "Find in Selection" flag
    // will be enabled automatically when multiple lines of text are selected
    "auto_find_in_selection": false,

    // When drag_text is enabled, clicking on selected text will begin a
    // drag-drop operation. This is not currently implemented under Linux.
    "drag_text": true,

    //
    // User Interface Settings
    //

    // The theme controls the look of Sublime Text's UI (buttons, tabs, scroll bars, etc)
    "theme": "Default.sublime-theme",

    // Set to 0 to disable smooth scrolling. Set to a value between 0 and 1 to
    // scroll slower, or set to larger than 1 to scroll faster
    "scroll_speed": 1.0,

    // Controls side bar animation when expanding or collapsing folders
    "tree_animation_enabled": true,

    // Controls animation throughout the application
    "animation_enabled": true,

    // Makes tabs with modified files more visible
    "highlight_modified_tabs": false,

    "show_tab_close_buttons": true,

    // Show folders in the side bar in bold
    "bold_folder_labels": false,

    // Draw divider lines between sections of the UI when using the Adaptive theme
    "adaptive_dividers": true,

    // Mac only. Valid values are true, false, and "auto". Auto will enable
    // the setting when running on a screen 2560 pixels or wider (i.e., a
    // Retina display). When this setting is enabled, OpenGL is used to
    // accelerate drawing. Sublime Text must be restarted for changes to take
    // effect.
    "gpu_window_buffer": "auto",

    // Mac only. Controls use of macOS tabs in 10.12 and newer. Each native tab
    // contains an entire project, thus allowing multiple projects in a single
    // window. Valid values are "system", "preferred" and "disabled".
    "native_tabs": "system",

    // Valid values are "system", "enabled" and "disabled"
    "overlay_scroll_bars": "system",

    // Allows tabs to scroll left and right, instead of simply shrinking
    "enable_tab_scrolling": true,

    // Display file encoding in the status bar
    "show_encoding": false,

    // Display line endings in the status bar
    "show_line_endings": false,

    // Magnifies the entire user interface. Sublime Text must be restarted for
    // this to take effect. 1.0 is normal scale, 0.0 allows for auto-detection
    // based on text scale with older Linux configurations that don't fully
    // support GTK display scaling.
    "ui_scale": 0.0,

    //
    // Application Behavior Settings
    //

    // Exiting the application with hot_exit enabled will cause it to close
    // immediately without prompting. Unsaved modifications and open files will
    // be preserved and restored when next starting.
    //
    // Closing a window with an associated project will also close the window
    // without prompting, preserving unsaved changes in the workspace file
    // alongside the project.
    "hot_exit": true,

    // remember_full_screen will allow Sublime Text to start in full screen
    // mode if it was exited in full screen mode. When set to false, Sublime
    // Text will never start in full screen mode.
    "remember_full_screen": false,

    // Mac only. If the user's default shell should be invoked to obtain the
    // user's customized environment variables. May be a boolean, or a string
    // of the path the shell to invoke. Sublime Text must be restarted for this
    // to take effect.
    "shell_environment": true,

    // Always prompt before reloading a file, even if the file hasn't been
    // modified. The default behavior is to automatically reload a file if it
    // hasn't been edited. If a file has unsaved changes, a prompt will always
    // be shown.
    "always_prompt_for_file_reload": false,

    // Mac only: When files are opened from finder, or by dragging onto the
    // dock icon, this controls if a new window is created or not.
    "open_files_in_new_window": true,

    // Mac only: This controls if an empty window is created at startup or not.
    "create_window_at_startup": true,

    // Mac only: Show recent files on the Touch Bar.
    "show_navigation_bar": true,

    // Set to true to close windows as soon as the last file is closed, unless
    // there's a folder open within the window.
    // On Mac, this value is overridden in the platform specific settings, so
    // you'll need to place this line in your user settings to override it.
    "close_windows_when_empty": false,

    // Show the full path to files in the title bar.
    // On Mac, this value is overridden in the platform specific settings, so
    // you'll need to place this line in your user settings to override it.
    "show_full_path": true,

    // Shows the Build Results panel when building. If set to false, the Build
    // Results can be shown via the Tools/Build Results menu.
    "show_panel_on_build": true,

    // Shows build errors just under the line on which they occur.
    "show_errors_inline": true,

    // Shows git repository information next to files in sidebar and in
    // the status bar. Sublime Text has to be restarted for this to take
    // effect.
    "show_git_status": true,

    // Enables showing git status for a git repository in the user's home
    // directory. This is disabled by default since it is typically accidental
    // and can cause heavy CPU usage related to file system watches.
    "allow_git_home_dir": false,

    // This setting determines whether tracked Git files should be diffed
    // against the index or HEAD.
    // Valid values are "index" or "head"
    "git_diff_target": "index",

    // Preview file contents when clicking on a file in the side bar. Double
    // clicking or editing the preview will open the file and assign it a tab.
    "preview_on_click": true,

    // folder_exclude_patterns and file_exclude_patterns control which files
    // are listed in folders on the side bar. These can also be set on a per-
    // project basis.
    "folder_exclude_patterns": [".svn", ".git", ".hg", "CVS"],
    "file_exclude_patterns": ["*.pyc", "*.pyo", "*.exe", "*.dll", "*.obj","*.o", "*.a", "*.lib", "*.so", "*.dylib", "*.ncb", "*.sdf", "*.suo", "*.pdb", "*.idb", ".DS_Store", "*.class", "*.psd", "*.db", "*.sublime-workspace"],
    // These files will still show up in the side bar, but won't be included in
    // Goto Anything or Find in Files
    "binary_file_patterns": ["*.jpg", "*.jpeg", "*.png", "*.gif", "*.ttf", "*.tga", "*.dds", "*.ico", "*.eot", "*.pdf", "*.swf", "*.jar", "*.zip"],

    // File indexing parses all files in the side bar, and builds an index of
    // their symbols. This is required for Goto Definition to work.
    "index_files": true,

    // Set the number threads to use for indexing. A value of 0 will make
    // Sublime Text guess based on the number of cores. Use the index_files
    // setting to disable all workers.
    "index_workers": 0,

    // index_exclude_patterns indicate which files won't be indexed.
    "index_exclude_patterns": ["*.log"],

    // List any packages to ignore here. When removing entries from this list,
    // a restart may be required if the package contains plugins.
    "ignored_packages": ["Vintage"]
}
