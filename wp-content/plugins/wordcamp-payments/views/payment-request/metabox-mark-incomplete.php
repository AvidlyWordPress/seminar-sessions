<div id="wcp_mark_incomplete">
	<p>
		<?php _e( 'Marking a payment as incomplete will notify the requester that they need to come back and give
		you more information before you can process the request.', 'wordcamporg' ); ?>
	</p>

	<p>
		<input type="checkbox" id="wcp_mark_incomplete_checkbox" name="wcp_mark_incomplete_checkbox" />
		<label for="wcp_mark_incomplete_checkbox">Mark as Incomplete</label>
	</p>

	<p>
		<label for="wcp_mark_incomplete_notes">Note for Requester:</label>
		<textarea id="wcp_mark_incomplete_notes" name="wcp_mark_incomplete_notes" class="large-text"
			placeholder="Need to attach receipt, etc"></textarea>
	</p>
</div> <!-- #wco_mark_incomplete -->
