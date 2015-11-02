{{--
    Copyright 2015 ppy Pty. Ltd.

    This file is part of osu!web. osu!web is distributed with the hope of
    attracting more community contributions to the core ecosystem of osu!.

    osu!web is free software: you can redistribute it and/or modify
    it under the terms of the Affero GNU General Public License as published by
    the Free Software Foundation, version 3 of the License.

    osu!web is distributed WITHOUT ANY WARRANTY; without even the implied
    warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
    See the GNU Affero General Public License for more details.

    You should have received a copy of the GNU Affero General Public License
    along with osu!web.  If not, see <http://www.gnu.org/licenses/>.
--}}
<script id="json-current-user" type="application/json">
    @if (Auth::check())
        {!! json_encode(Auth::user()->defaultJson()) !!}
    @else
        {"data":{}}
    @endif
</script>

<script data-turbolinks-eval="always">
    var currentUser = osu.parseJson('json-current-user').data;
</script>