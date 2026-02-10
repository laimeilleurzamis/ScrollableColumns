Scrollable Columns
This Kanboard plugin modifies the default board layout to make columns scrollable independently while keeping the headers fixed.

Features
Independent Scrolling: Each column on the board has its own vertical scrollbar. This allows you to scroll through long task lists without losing sight of the other columns.

Fixed Headers: Column headers remain visible while scrolling through tasks, as the scrolling applies only to the task list (.board-task-list).

Screen Usage: The board is adjusted to occupy 100% of the window height, with a dynamic calculation for the task area (calc(100vh - 170px)).

Custom Style: The scrollbars are styled (gray on a light background) for a more modern and unobtrusive appearance (Webkit compatible).

Installation
Download the plugin archive or clone this repository and put it in the plugin file of your kanboard.

Technical Information
The plugin injects a CSS stylesheet (style.css) via the template:layout:css hook. It modifies the behavior of the main container (#main, #board-container) to prevent global page scrolling and enable it only at the task list level.

Author
Author: laimeilleurzamis

Version: 1.0.0
