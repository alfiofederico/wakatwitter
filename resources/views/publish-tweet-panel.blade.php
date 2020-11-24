            
            
            <div class="border border-blue-400 rounded-lg px-8 py-6 mb-8 bg-white">
                <form method="POST" action="/tweets">
                    @csrf

                    <textarea   onkeyup="countChars(this);" id="textarea" name="body" class="w-full" placeholder="What's going on? (max 255 characters)" style="outline:none"  required></textarea>
                    <hr class="my-4">
                    <footer class="flex justify-between">
                    <img src="{{ auth()->user()->avatar }}"
                        alt="your avatar"
                        class="rounded-full mr-2"
                        width="50"
                        height="50">
                    <p class="text-sm italic text-green-600" id="charNum">255 characters left</p>
                    
                        
                        <button type="submit" class="bg-blue-500 rounded-lg shadow py-1 px-8 text-sm text-white hover:bg-blue-600" style="outline:none">WakaTweet!</button>
                    </footer>             
                </form>
                
                @error('body')
                    <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                @enderror
                    
            </div>

      <script>
          function countChars(obj) {
    let maxLength = 255;
    let strLength = obj.value.length;
    let charRemain = maxLength - strLength;

    if (charRemain < 0) {
        document.getElementById("charNum").innerHTML =
            '<span style="color: red;">You have exceeded the limit of ' +
            maxLength +
            " characters</span>";
    } else {
        document.getElementById("charNum").innerHTML =
            charRemain + " characters left";
    }
}
      </script>

